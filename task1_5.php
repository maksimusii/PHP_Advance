<?php
//Задание 1: Класс Good описывает сущность продукта интернет магазина
//Задание 2: Описанны своиства класса Good: id, good_name, good_description, good_price
//Задание 3: Добавленны методы для класса Good: showGood(), removeGood(), addGood()
class Good {
  public $id;
  public $good_name;
  public $good_description;
  public $good_price;

  public function __constructor(
    int $id,
    string $good_name,
    string $good_description,
    string $good_price
  ) {
    $this->id = $id;
    $this->good_name = $good_name;
    $this->good_description = $good_description;
    $this->good_price = $good_price;
  }

  public function showGood() {
    //Метод отображения товара из каталога
    return $good_name . " " .  $good_description . " " . $good_price;
  }

  public function removeGood() {
    //метод удаления товара из каталога
  }

  public function addGood() {
    //метод добавления товара в каталог
  }
}

$good1 = new Good();
$good1->showGood();

//Задание 4: Добавляем новое свойство  size_type  и переопределяем метод showGood
class Laptop extends Good {
  public $size_type;
  public function __constructor(
    string  $size_type
  ) {
    $this->size_type = $size_type;
  }

  public function showGood() {
    //Метод отображения товара из каталога
    return $good_name . " " .  $good_description . " " . $good_price . " " . $size_type;
  }
}

$laptop1 = new Laptop();
$laptop1->showGood();

//Задание 5:
class A {
  public function foo() {
      static $x = 0;
      echo ++$x;
  }
}
$a1 = new A(); //Создает объект $a1 с классом A в области памяти
$a2 = new A(); //Создает объект $a2 с классом A в области памяти 
$a1->foo(); // Вызывается метод foo который обращается к статическим свойству $х класса A, выводит 1 и увеличивает $х на единицу
$a2->foo(); // Вызывается метод foo который обращается к статическим свойству $х класса A, выводит 2 и увеличивает $х на единицу
$a1->foo(); // Вызывается метод foo который обращается к статическим свойству $х класса A, выводит 3 и увеличивает $х на единицу
$a2->foo(); // Вызывается метод foo который обращается к статическим свойству $х класса A, выводит 4 и увеличивает $х на единицу