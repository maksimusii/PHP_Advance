<?php
//Задание 2*: Реализовать паттерн Singleton при помощи traits. 


trait SingletonTrait {
  private static $instance;  // Экземпляр объекта
// Защищаем от создания через new Singleton
  private function __construct() { /* ... @return Singleton */ } 
// Защищаем от создания через клонирование
  private function __clone() { /* ... @return Singleton */ }
// Защищаем от создания через unserialize
  private function __wakeup()  { /* ... @return Singleton */ }
  // Защищаем от создания через serialize
  protected function __sleep() { /* ... @return Singleton */ }
// Возвращает единственный экземпляр класса. @return Singleton
  public static function getInstance() {
      if ( empty(self::$instance) ) {
        self::$instance = new self();
      }
      return self::$instance;
  }
  
}
class Singleton {
  use SomeTrait;

  public function doAction() { }
  
}

Singleton::getInstance()->doAction(); 