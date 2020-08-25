<?php
 require_once "../lib/Twig/Autoloader.php";
//  require_once 'classes/App.php';
 require_once "../model/CatalogDb.php";

 Twig_Autoloader::register();
try {
// Указывает, где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('../templates');
// Инициализируем Twig
  $twig = new Twig_Environment($loader);

  $goods = new CatalogDb;
  

// Подгружаем шаблон


if ($_SERVER['REQUEST_URI'] == "/") {
  $template = $twig->loadTemplate('catalog.tmpl');

  echo $template->render(array(
    "goods" => $goods->getGoods(),
  ));
} 

$url_array = explode("/", $_SERVER['REQUEST_URI']);
if ($url_array[1] == "goods") {
  
  $page= "";
  $i = 0;
  $goods_list = array_slice($goods->getGoods(), 0, (int)$_POST['count_in_list']);
  foreach($goods_list as $good) {
    $i++;
    $page .= '
    <p>' . $i .'</p>
    <div class="catalogue_item good_' . $good['id_good'] . ' ">
    <p>' . $good['good_name'] . '</p>
    <p>' . $good['good_price'] . '</p>
    <p class="buyme" id="good_' . $good['id_good'] . '">Купить</p>
    </div>
    ';
  }
  print_r($page);
}
  


 } catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}