<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title></title>
</head>

<body>
  <p>
    <?php
      class Food {
        private $name, $price;

        public function Show_price() {
          $show_price = 250;
          echo $show_price . '<br>';
        }

        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }

      class Animal {
        private $name, $height, $weight;

        public function show_height() {
          $show_height = 60;
          echo $show_height;
        }

        public function __construct(string $name, int $height, int $weight) {
         $this->name = $name;
         $this->height = $height;
         $this->weight = $weight;
        }
      }

      $Food = new Food('potato',250);
      $Animal = new Animal('dog',60,5000);

      print_r($Food);
      echo '<br>';
      print_r($Animal);
      
      echo '<br>';
      $Food->Show_price(250);
      $Animal->show_height(50);

    ?>
  </p>
</body>

</html>