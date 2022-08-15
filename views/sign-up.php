<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../common/config.php'); ?>
    <title>会員登録画面 / スロットゲーム</title>
    <meta name="description" content=”会員登録画面です">
</head>
<body class="signup">
    <main class="form-signup text-center">
        <form action="sign-up.php" method="post">
            <h1>アカウントを作る</h1>
            <input type="text" class="form-control" name="nickname" placeholder="ニックネーム" maxlenth="50" required autofocus>
            <input type="text" class="form-control" name="name" placeholder="ユーザー名、例)techis123" maxlenth="50" required>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlenth="254" required >
            <input type="password" class="form-control" name="password" placeholder="パスワード" minlegth="4" maxlength="128" required>
            <button class="w-100 btn btn-lg btn-log" type="submit">登録する</button>
            <p class="mt-3 mb2"><a href="sign-in.php">ログインする</a></p>
            <p class="mt-2 mb-3">&copy; 2022</p>
        </form>
    </main>
</body>