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
            public function show_price(){
              echo $this->price;
          }
            // コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
          }

        //インスタンス化する
        $potate = new Food('potate',250);

        //インスタンス$Foodの各プロパティ値を出力する
        print_r($potate);
        echo "<br>";

        // Animal
        class Animal {
          private $name;
          private $height;
          private $weight;
         
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          public function show_height(){
            echo $this->height;
          }

        }

        $dog=new Animal('dog',60,5000);
        print_r($dog);
        echo"<br>";

        // Add鈴木先生

        $potate->show_price();
        echo"<br>";

        $dog->show_height();
      ?>
    </body>

 </html>