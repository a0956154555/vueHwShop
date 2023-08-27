<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  class product
  {
    public $productImgLink;
    public $productImgAlt;

    public function __construct($productImgLink, $productImgAlt)
    {
      $this->productImgLink = $productImgLink; //裡面的不要有錢錢符號 很重要要記得！！
      $this->productImgAlt = $productImgAlt;
    }
  };
  $imgSrc = null;

  if (empty($_GET["img-src"])) {
    echo "是空的";
  } else {
    echo "不是空的";
    $imgSrc = $_GET["img-src"];
  }
  if ($imgSrc === "吹風機") {
    $appearProduct = new product("../img/1.jpeg", $imgSrc);
  } else if ($imgSrc === "炒菜鍋") {
    $appearProduct = new product("../img/2.jpeg", $imgSrc);
  }
  echo  "<img src='{$appearProduct->productImgLink}' alt='{$appearProduct->productImgAlt}'>";
  ?>
</body>
<?php
// echo $imgSrc;
?>

</html>