<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../common/config.php'); ?>
    <title>ログイン画面 / スロットゲーム</title>
    <meta name="description" content=”ログイン画面です">
</head>
<body class="signup">
    <main class="form-signup text-center">
        <form action="sign-in.php" method="post">
            <h1>スロットゲームにログインする</h1>

            <?php if(isset($view_try_login_result) && $view_try_login_result === false) : ?>
                <div class="alert alert-warning alert-sm" role="alert">
                    ログインに失敗しました。メールアドレス、パスワードが正しいか確認してください。
                </div>
            <?php endif; ?>

            <input type="email" class="form-control" name="email" placeholder="メールアドレス" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="パスワード" required>
            <button class="w-100 btn btn-lg btn-log" type="submit">ログイン</button>
            <p class="mt-3 mb2"><a href="sign-up.php">会員登録する</a></p>
            <p class="mt-2 mb-3">&copy; 2022</p>
        </form>
    </main>
</body>
</html>