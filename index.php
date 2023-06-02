<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\mystyle.css">
  <title>インフラについて</title>
</head>

<body>
 <!-- headerの部分テンプレート -->
  <?php include("html\header.php") ?>
  <div class="header">
    <header>
      <h1>インフラについての勉強</h1>
      <?php
        date_default_timezone_set('Asia/Tokyo');
        echo("現在の時刻は".date('g時 i分 s秒')."です");
      ?>
    </header>
  </div><p id="time">現在の時刻は...</p>
  <h2>ネットワークを学ぶ</h2>
  <h3>プロトコル</h3>
  <ul>
    <li>LAN,WAN</li>
    <li>HTTP</li>
    <li>OSI参照モデル(レイヤ)</li>
    <li></li>
    <li></li>
    <li></li>
  </ul>

  <script src="js\myscript.js"></script>
</body>

</html>