<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        // Foodクラス
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

        // Animalクラス
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

        // インスタンス作成
        $food = new Food('potato',250);
        print_r($food);
        echo '<br>';

        $animal = new Animal('dog',60,5000);
        print_r($animal);
        echo '<br>';
        
        //メソッドへアクセス
        $food->show_price();
        echo '<br>';

        $animal->show_height();

        ?>
    </p>
</body>
</html>