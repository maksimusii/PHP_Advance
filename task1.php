<?php
//Задание 1: Создать структуру классов ведения товарной номенклатуры.
// а. Есть абстрактный товар;
// b. Есть цифровой товар, штучный физический товар и товар на вес;
// c. У каждого есть метод подсчета финальной стоимости;
// d. У цифрового товара стоимость постоянная. У штучного товара стоимость зависит от количества штук, у весового – 
// в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.

abstract class Good {
  
  public $id;
  public $good_name;
  public $good_description;
  public $piece;
  const PRICE = 10;

 abstract protected function getSum($piece);
}


class DigitGood extends Good {
  public function  getSum($piece) {
    return self::PRICE * $piece;
  }
}

class PieceGood extends Good {
  public function  getSum($piece) {
    return self::PRICE * 2 * $piece;
  }
}

class WeightGood extends Good {
  public function  getSum($piece) {
    function __set($weight, $value) {}
    return self::PRICE * $this->weight;
  }
}

$dig = new DigitGood;
$pie = new PieceGood;
$wei = new WeightGood;

echo "Доход с продаж цифровых товаров: " . $dig->getSum(1) . "</br>";
echo "Доход с продаж штучных  товаров: " . $pie->getSum(4) . "</br>";
echo "Доход с продаж весовых товаров: " . $wei->getSum(1, $wei->weight = 15);
