<?php
    // セッションの利用を開始
    session_start();
    // ワンタイムトークンの一致を確認
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // トークンが一致しなかった場合
        die('お問い合わせの送信に失敗しました');
    }

    // 必須項目の確認
    // お名前に入力があった場合一旦セッションに保存
    if(empty($_POST['name'])) {
        $_SESSION['flash']['name'] = 'お名前は必須項目です';
    }
    $_SESSION['original']['name'] = $_POST['name'];

    // 貴社名に入力があった場合一旦セッションに保存
    if(empty($_POST['company'])) {
        $_SESSION['flash']['company'] = '貴社名は必須項目です';
    }
    $_SESSION['original']['company'] = $_POST['company'];
    
    // 所属部署に入力があった場合一旦セッションに保存
    $_SESSION['original']['department'] = $_POST['department'];

    // メールアドレスに入力があった場合一旦セッションに保存
    if(empty($_POST['email'])) {
        $_SESSION['flash']['email'] = 'メールアドレスは必須項目です';
    }
    $_SESSION['original']['email'] = $_POST['email'];

    // URLに入力があった場合一旦セッションに保存
    if(empty($_POST['url'])) {
        $_SESSION['flash']['url'] = 'URLは必須項目です';
    }
    $_SESSION['original']['url'] = $_POST['url'];

    // 電話番号に入力があった場合一旦セッションに保存
    if(empty($_POST['phone'])) {
        $_SESSION['flash']['phone'] = '電話番号は必須項目です';
    }
    $_SESSION['original']['phone'] = $_POST['phone'];

    // お問い合わせ内容に入力があった場合一旦セッションに保存
    if(empty($_POST['message'])) {
        $_SESSION['flash']['message'] = 'お問い合わせ内容は必須項目です';
    }
    $_SESSION['original']['message'] = $_POST['message'];

    // 必須入力項目が入力されていなければindex.phpへリダイレクト
    if(empty($_POST['name']) || empty($_POST['company']) || empty($_POST['email']) || empty($_POST['url']) || empty($_POST['phone']) || empty($_POST['message'])) {
        header('Location: /index.php');
        exit;
    }

    // 言語設定を日本語にします
    mb_language("Japanese");

    // 文字エンコーディングをUTF-8にします
    mb_internal_encoding("UTF-8");

    // 送信先のメールアドレス
    if($_POST) {
        $to = 'youraddress@example.com';

        // 送信先のメールの題名
        $subject = 'お問い合わせがありました';

        // メール本文
        // 1行ずつメール本文に追記します \nは改行の意味
        $message = "お問い合わせがありました。\n";
        $message .= "\n";
        $message .= "入力された内容は以下の通りです。\n";
        $message .= "---\n";
        $message .= "\n";
        $message .= "お名前：\n";
        $message .= $_POST["name"];
        $message .= "\n";
        $message .= "貴社名：\n";
        $message .= $_POST["company"];
        $message .= "\n";
        $message .= "所属部署：\n";
        $message .= $_POST["department"];
        $message .= "\n";
        $message .= "メールアドレス:\n";
        $message .= $_POST["email"];
        $message .= "\n";
        $message .= "URL：\n";
        $message .= $_POST["url"];
        $message .= "\n";
        $message .= "電話番号：\n";
        $message .= $_POST["phone"];
        $message .= "\n";
        $message .= "お問い合わせ内容:\n";
        $message .= $_POST["message"];

        // 自動返信メール
        if(mb_send_mail($to,$subject,$message)) {
            echo "メールが送信されました";
        } else {
            echo "メールの送信に失敗しました";
        }
    } else {
        echo "HTMLからのPOST送信受信に失敗しました";
    }
?>