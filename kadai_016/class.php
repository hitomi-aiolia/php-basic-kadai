<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>
<body>

 <?php
 //クラスを定義する
 class Food {
 //プロパティを定義する
 private $name;
 private $price;
     //コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price =$price;
      }
 //各プロパティの値を取得するメソッド
 public function show_price(string $price)
 {
  $this->price= $price;
 }
 }

    //インスタンス化する
     $food= new Food('potato', 250);

    //プロパティにアクセスし、値を代入する
    print_r($food);
    echo'<br>';

//クラスを定義する
class Animal{
     //プロパティを定義する
     private $name;
     private $height;
     private $weight;

     //各プロパティの値を取得するメソッド
     public function show_height( $height)
    { 
     $this->height= $height;
    }
      //コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight)
     {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
     }
}

//インスタンス化する
$food= new Food('potato', 250);

//インスタンス化する
$animal= new Animal('dog', 60, 5000);
print_r($animal);
echo '<br>';






?>
</p>
</body>
</html>


