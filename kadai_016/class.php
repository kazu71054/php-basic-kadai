<!DOCTYPE html>
 <html lang="ja">
 
    <head>
        <meta charset="UTF-8">
        <title>課題　クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
    </head>

    <body>
        <p>
          <?php
        // Food
        //クラスを定義する
          class Food {
            // プロパティを定義する
            private $name;
            private $price;
            public function show_price(int $price){
              $this->price = $price;
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
          }

        //インスタンス化する
        $Food = new Food('potate',250);

        //インスタンス$Foodの各プロパティ値を出力する
        print_r($Food);
        echo "<br>";

        // Animal
        class Animal {
          private $name;
          private $height;
          private $weight;
          public function show_height(int $height){
            $this->height = $height;
          }
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
        }

        $Animal=new Animal('dog',60,5000);
        print_r($Animal);
          ?>
        </p>
         
        </p>
    </body>

 </html>