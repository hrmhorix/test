<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset ="UTF-8">
<title>4eachblog 掲示板</title>
<link rel = "stylesheet" type = "text/css" href= "style.css">
  </head>
<header><img src = "4eachblog_logo.jpg">
  <br>
  <div class = "header">
  <ul>
  <li>トップ</li>
  <li>プロフィール</li>
  <li>4eachについて</li>
  <li>登録フォーム</li>
  <li>問い合わせ</li>
  <li>その他</li>
  </ul>
    </div>
  </header>
  <body>
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO ("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");
    
    
  ?>
  </body>
<mein>
  <div class = "left">
  <h1>プログラミングに役立つ掲示板</h1>
  <div class = "inputForm">
  <h3>入力フォーム</h3>
  <form method = "post" action = "insert.php">
  <label>ハンドルネーム</label><br>
  <div><input type = "text" class = "text" size = "35" name = "ind_handlename"></div><br>
  
  <label>タイトル</label><br>
  <div><input type = "text" class = "text" size = "35" name = "ind_title"></div><br>
  
  <label>コメント</label><br>
  <div><textarea cols = "50" rows = "5" name = "ind_comments" class = "text"></textarea> </div><br>
    
  <div><input type = "submit" class = "button" value = "投稿する"></div>
  </form>
  </div>
    <?php
    while ($row = $stmt->fetch()){
      
    
  echo "<div class = 'post'>";
  echo "<h3>".$row['title']."</h3>";
    
  echo "<p>".$row['comments']."</p>";
    echo "<div class = 'nickname'>";
    echo "<p>"."posted by".$row['handlename']."</p>";
    echo "</div>";
  echo "</div>";
    }
    ?>
    
    
    <div class = "post">
  <h3>タイトル</h3>
    
  <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身。
  記事の中身、記事の中身、記事の中身、記事の中身、
   記事の中身、記事の中身、記事の中身、記事の中身、</p>
    <div class = "nickname"><p>posted by 通りすがり</p></div>
  
  </div>
    </div>
  
  <div class = "right">
    <h2>人気の記事</h2>
    <div class = "ul">
    <ul>
      <li>PHPオススメ本</li>
      <li>PHP MyAdminの使い方</li>
      <li>いま人気のエディタTop5</li>
      <li>HTMLの基礎</li>
      </ul>
    </div>
    <h2>オススメリンク</h2>
      <div class = "ul">
    <ul>
      <li>インターノウス株式会社</li>
      <li>XAMPPのダウンロード</li>
      <li>Eclipseのダウンロード</li>
      <li>Braketsのダウンロード</li>
      </ul>
    </div>
    <h2>カテゴリ</h2>
     <div class = "ul">
    <ul>
      <li>HTML</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>JavaScript</li>
      </ul>
    </div>
  </div>
  </mein>

<footer>copyright internous | 4each blog is the one which provides A to Z about programming.</footer>



</html>