<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $company = $_POST["company"];
        $department = $_POST["department"];
        $email = $_POST["email"];
        $url = $_POST["url"];
        $phone = $_POST["phone"];
        $message = $_POST["message"]; 
        $to = "your_email@example.com";
        $subject = "お問い合わせがありました";
        $headers = "From:your_email@example.com";
        $body = "お名前: $name\nメールアドレス: $email\n\n$message";
        if (mail($to, $subject, $body, $headers)) {
            $message = "お問い合わせが完了しました。<br>ありがとうございます。後ほど担当よりご連絡いたします。";
        } else {
            $message = "エラーが発生しました。お手数ですがもう一度お試しください。";
        }
    } else {
        header("Location: contact.php");
    }
?>

<html>
    <head>
        <title>お問い合わせフォーム - 送信完了画面</title>
    </head>
    <body>
        <h1>お問い合わせフォーム - 送信完了画面</h1>
        <p><?php echo $message; ?></p>
        <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
    </body>
</html>