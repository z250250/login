<!DOCUTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        <main>
            <form action="register_confirm.php" method="post" enctype="multipart/form-data">
                <div class="form_contents">
                    <h1>会員登録</h1>
                    <div class="name">
                        <div class="hissu">必須</div> <label>氏名</label><br>
                            <input type="text" class="formbox" size="50" name="name" required>
                    </div>
                    <div class="mail">
                        <div class="hissu">必須</div><label>メールアドレス</label><br>
                            <input type="text" class="formbox" size="50" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+¥.[a-z]{2,3}$" required>
                    </div>
                    <div class="password">
                        <div class="hissu">必須</div><label>パスワード(半角英数字6文字以上)</label><br>
                            <input type="password" class="formbox" size="50" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                    </div>
                    <div class="password">
                        <div class="hissu">必須</div><label>パスワード確認</label><br>
                            <input type="password" class="formbox" size="50" name="confirm_password" id="confirm" oninput="confirmpassword(this)" required>
                    </div>
                    <div class="picture">
                        <label>プロフィール写真</label><br>
                        <input type="hidden" name="max_fire_size" value="1000000">
                        <input type="file" size="50" name="picture">
                    </div>
                    <div class="comments">
                        <label>コメント</label><br>
                        <textarea rows="5" cols="50" name="comments"></textarea>
                    </div>
                    <div class="toroku">
                        <input type="submit" class="submit_button" size="35" value="登録する">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            ©︎ 2018 InterNous.inc All right reserved
        </footer>
        
        <script>
            function confirmpassword(confirm){
                var input1=password.value;
                var input2=confirm.value;
                if(input1 !=input2){
                    confirm.setCustomValidity("パスワードが一致しません。");
                }else{
                    confirm.setCustomValidity("");
                }
            }
        </script>
    </body>

</html>