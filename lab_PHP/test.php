<?php

echo "<h1> Test </h1>";

//конкатенация строк
$name = "Mkrtych ";
$surname = "Khachatrian";
$fullname = $name.$surname;
echo $fullname, "<br>";

//хеш-таблица
echo "<br>";
$arr = array("color" => "blue", 1 => "in 1", 2 => "in 2");
print_r($arr);
echo "<br>";
$arr["color"] = "yellow";
$arr["food"] = "cake";
print_r($arr);
echo "<br>";
print_r(array_keys($arr));
echo "<br>";
print_r(array_values($arr));
echo "<br>";
unset($arr["food"]);
print_r($arr);
echo "<br>";

//explode, implode
echo "<br>";
$arr2 = array("dog", "cat", "mouse");
$str = implode(",", $arr2);
echo $str, "<br>";
$arr2_new = explode(",", $str);
print_r($arr2_new);
echo "<br>";

//разыменование
$x = "name";
$$x = "foo";
echo "<br>$name";
echo ' ', $$x;
echo "<br>";

//сравнение
echo "<br>";
$a = 5;
$b = 10;
echo var_dump($a == $b), "<br>";
echo var_dump($a > $b), "<br>";
echo var_dump($a < $b), "<br>";
echo var_dump($a != $b), "<br>";
echo "<br>";

//приведение типов
$num1 = 10;
$num2 = "25";
$num3 = "5.2qqqqq";
echo $num1 + (int)$num2, "<br>";
echo $num1 + (float)$num3, "<br>";
echo "<br>";

//класс
class car {
    public $brand;
    public $price;
    function __construct($brand, $price) {
        $this->brand = $brand;
        $this->price = $price;
    }
}
class jeep extends car {
    public $consumption;
    function __construct($brand, $price, $consumption) {
        parent::__construct($brand, $price);
        $this->consumption = $consumption;
    }
}
$ob = new jeep('Toyota', 20000, 15);
echo $ob->brand, ' ', $ob->price,' ',$ob->consumption,"<br>";
echo "<br>";

//singleton
class Singleton {
    private static $instance;
    private $var;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance() {
        if(self::$instance === NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function test() {
        var_dump($this);
    }
}

$ob1 = Singleton::getInstance();
$ob1 -> test();
// код ниже выдаст ошибку
//$ob2 = new Singleton();
//$ob3 = clone $ob1;
?>







