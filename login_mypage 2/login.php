


<!DOCTYPE>
<html lang="ja">
    <head>
        <meta charset="UTF=8">
        <title>ログインページ</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        <main>
            <form method="post" action="mypage.php">
                <div class="mail">
                    <label>メールアドレス</label><br>
                            <input type="text" class="formbox" size="30" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+¥.[a-z]{2,3}$" required value="<?php setcookie('mail',$_SESSION['mail'],time()+60*60*24*7); ?>">
                </div>
                <div class="password">
                   <label>パスワード</label><br>
                            <input type="password" class="formbox" size="30" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required value="<?php setcookie('password',$_SESSION['password'],time()+60*60*24*7); ?>">
                </div>
                <div class="login">
                    <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="true"> <?php if(isset($_SESSION['mail']['password'])){
                        echo "checked= 'checked'";
}
                        ?>ログイン状態を保持する</label>
                </div>
                <input type="submit" class="button" value="ログイン">
            </form>
        </main>
        <footer>
              ©︎ 2018 InterNous.inc All right reserved
        </footer>
    </body>
</html>