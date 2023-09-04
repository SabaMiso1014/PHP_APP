<?php
    // セッションの利用を開始
    session_start();

    // セッションのflashメッセージをクリア
    $flash = isset($_SESSION['flash']) ? $_SESSION['flash'] : [];
    unset($_SESSION['flash']);

    // 過去のPOSTデータをクリア
    $original = isset($_SESSION['original']) ? $_SESSION['original'] : [];
    unset($_SESSION['original']);

    // ワンタイムトークン生成
    $toke_byte = openssl_random_pseudo_bytes(16);
    $csrf_token = bin2hex($toke_byte);

    // トークンをセッションに保存
    $_SESSION['csrf_token'] = $csrf_token;
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お問い合わせフォーム - 入力画面</title>
    </head>
    <body>
        <h1>お問い合わせフォーム - 入力画面</h1>
        <p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>
        <form method="post" action="confirm.php">
            <div>
                <!-- お名前 -->
                <label for="name">お名前:</label><br>
                <input type="text" id="name" name="name" value="<?php echo isset($original['name']) ? $original['name'] : null;?>" required></input>
                <?php echo isset($flash['name']) ? $flash['name'] : null ?>
            </div>
            <div>
                <!-- 貴社名 -->
                <label for="company">貴社名:</label><br>
                <input type="text" id="company" name="company" value="<?php echo isset($original['company']) ? $original['company'] : null;?>" required></input>
                <?php echo isset($flash['company']) ? $flash['company'] : null ?>
            </div>
            <div>
                <!-- 所属部署 -->
                <label for="department">所属部署:</label><br>
                <input type="text" id="department" name="department"></input>
                <?php echo isset($flash['department']) ? $flash['department'] : null ?>
            </div>
            <div>
                <!-- メールアドレス -->
                <label for="email">メールアドレス:</label><br>
                <input type="email" id="email" name="email" value="<?php echo isset($original['email']) ? $original['email'] : null;?>" required></input>
                <?php echo isset($flash['email']) ? $flash['email'] : null ?>
            </div>
            <div>
                <!-- URL -->
                <label for="url">URL:</label><br>
                <input type="text" id="url" name="url" value="<?php echo isset($original['url']) ? $original['url'] : null;?>" required></input>
                <?php echo isset($flash['url']) ? $flash['url'] : null ?>
            </div>
            <div>
                <!-- 電話番号 -->
                <label for="phone">電話番号:</label><br>
                <input type="text" id="phone" name="phone" value="<?php echo isset($original['phone']) ? $original['phone'] : null;?>" required></input>
                <?php echo isset($flash['phone']) ? $flash['phone'] : null ?>
            </div>
            <div>
                <!-- お問い合わせ内容 -->
                <label for="message">お問い合わせ内容:</label><br>
                <textarea id="message" name="message" value="<?php echo isset($original['message']) ? $original['message'] : null;?>" required></textarea>
                <?php echo isset($original['message']) ? $original['message'] : null;?>
            </div>
            <!-- CSRF対策 -->
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>" />
            <!-- 確認ボタン -->
            <input type="submit" value="確認">
            <!-- リセットボタン -->
            <input type="reset" value="リセット">
        </form>
    </body>
</html>