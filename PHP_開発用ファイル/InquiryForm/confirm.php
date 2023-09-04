<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $name = $_POST["name"];
        $company = $_POST["company"];
        $department = $_POST["department"];
        $email = $_POST["email"];
        $url = $_POST["url"];
        $phone = $_POST["phone"];
        $message = $_POST["message"]; 
    } else { 
        header("Location: index.php"); 
    } 
?>

<html>
    <head>
        <title>お問い合わせフォーム - 確認画面</title>
    </head>
    <body>
        <h1>お問い合わせフォーム - 確認画面</h1>
        <p>以下の内容で間違いがなければ、「送信する」ボタンを押してください。</p>
        <table>
            <tr><td>お名前：</td><td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>貴社名：</td><td><?php echo htmlspecialchars($company, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>所属部署：</td><td><?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>メールアドレス：</td><td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>URL：</td><td><?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>電話番号：</td><td><?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>お問い合わせ内容：</td><td><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        </table>
        <form method="post" action="send.php">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="company" value="<?php echo $company; ?>">
            <input type="hidden" name="department" value="<?php echo $department; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="url" value="<?php echo $url; ?>">
            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">
            <input type="submit" value="送信する">
            <button type="button" onclick="history.back()">前画面に戻る</button>
        </form>
    </body>
</html>