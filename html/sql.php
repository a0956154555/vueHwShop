<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $imgSrc = null;
  if (empty($_GET["img-src"])) {
    // echo "是空的";
  } else {
    // echo "不是空的";
    $imgSrc = $_GET["img-src"];
  }
  if ($imgSrc === "吹風機") {;
  } else if ($imgSrc === "炒菜鍋") {;
  }

  error_reporting(E_ALL); //用來顯示錯誤
  ini_set('display_errors', 1); //永許查看錯誤

  $host = "localhost"; // 哪一棟公寓
  $username = "root1"; // 我是誰
  $password = "1234";  // 我的識別證
  $dbname = "text"; // 哪一扇門
  $productAlt = null;
  $productLink = null;

  echo "<div>有嗎</div>";

  $connection = new mysqli($host, $username, $password, $dbname); //開門中

  if ($connection->connect_errno) {
    echo "連線失敗，錯誤訊息：" . $connection->connect_error;
  }
  echo "連線成功";
  // 進入查詢環節
  $query = "SELECT `id`, `link`, `cname` FROM `product` WHERE cname='$imgSrc';";

  $result = $connection->query($query);
  if (!$result) {
    die("查詢失敗" . $connection->error);
  }
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $productAlt = $row['cname'];
      $productLink = $row['link'];
    }
  }

  $connection->close();

  ?>
  <img src="<?php echo $productLink ?>" alt="<?php echo $productAlt ?>">
</body>

</html>