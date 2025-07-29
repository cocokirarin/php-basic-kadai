<?php
// Foodクラスの定義
class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price;
    }
}

// Animalクラスの定義
class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo $this->height;
    }
}

// Foodインスタンス生成・出力
$food = new Food("potato", 250);
print_r($food);
echo "<br>";

// Animalインスタンス生成・出力
$animal = new Animal("dog", 60, 5000);
print_r($animal);
echo "<br>";

// 数字の出力（順番に注意）
$food->show_price();
echo "<br>";
$animal->show_height();
?>
