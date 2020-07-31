<?php
mb_internal_encoding("utf8");
session_start();
if(empty($_SESSION['id'])){
 
try{
    $pdo =new PDO("mysql:dbname=abe;host=localhost;","root","root");
}catch(PDOException $e){
    die("<p>申し訳ございません。現在サーバが混み合っており一時的にアクセスができません。<br>しばらくしてから再度ログインをしてください。</p>
    <a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>"
       );
}


$stmt =$pdo->prepare("select*from login_mypage where mail=? &&  password=?");

$stmt->bindValue(1,$_POST["mail"]);
$stmt->bindValue(2,$_POST["password"]);

echo $_POST["mail"];
echo $_POST["password"];
    
$stmt->execute();
$pdo=NULL;

while($row=$stmt->fetch()){
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['mail']=$row['mail'];
    $_SESSION['password']=$row['password'];
    $_SESSION['picture']=$row['picture'];
    $_SESSION['comments']=$row['comments'];
    
}

if(empty($_SESSION['id'])){
    header("Location:login_error.php");
}
}

?>
<!DOCTYPE>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <a href="login.php">ログアウト</a>
        </header>
        <main>
            <div class="mypage">
                <h1>会員情報</h1>
                <div class="name">
                    <?php echo "こんにちは！".$_SESSION['name']."さん";?>
                </div>
                <div class="pic">
                    <img src="<?php echo $_SESSION['picture'];?>">
                </div>
                <div class="info">
                    <p>氏名:<?php echo $_SESSION['name'];?></p>
                    <p>メール: <?php echo $_SESSION['mail'];?></p>
                    <p>パスワード:<?php echo $_SESSION['password'];?></p>
                </div>
                <div class="comments">
                    <?php echo $_SESSION['comments'];?>
                </div>
                <form method="post" action="mypage_hensyu.php" class="center">
<!--                    <input type="hidden" value="<?php echo rand(1,10);?>" name="from_mypage">-->
                    <div class="button">
                        <input type="submit" class="submit" size="35" value="編集する">
                    </div>
                </form>
            </div>
        </main>
        <footer>
             ©︎ 2018 InterNous.inc All right reserved
        </footer>
    </body>
</html>