<?php
 require_once "lib/Twig/Autoloader.php";
 require_once 'classes/App.php';
 require_once 'classes/Db.php';

 Twig_Autoloader::register();
try {
// Указывает, где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');
// Инициализируем Twig
  $twig = new Twig_Environment($loader);
// Подгружаем шаблон
  $db = new \Classes\Db;
  
if (empty($_GET['id_img'])) {
  $template = $twig->loadTemplate('gallery.tmpl');
  $sql = "SELECT * FROM images";
  echo $template->render(array(
    'images' => $db->executeQuery($sql),
  ));
} else {
  $template = $twig->loadTemplate('imagepage.tmpl');
    $sql = "SELECT * FROM images WHERE id_img = " . $_GET['id_img'];
    echo $template->render(array(
      'image' => $db->getAssocResult($sql)[0],
    ));
}
 
 } catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}


