<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="imgs\chimeiLogo.png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>登入</h2>
        </div>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">工號</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">登入</button>
        </form>
        <?php
            // PHP 登入驗證
            if (isset($_POST['submit'])) {
                $valid_username = "user";
                $valid_password = "password";
                $username = $_POST['username'];
                $password = $_POST['password'];

                if ($username === $valid_username && $password === $valid_password) {
                    // 登入成功，轉發到某個頁面或執行其他操作
                    header("Location: index.php");
                    exit;
                } else {
                    // 登入失敗，顯示錯誤訊息
                    echo "<p class='error-message'>工號或密碼錯誤</p>";
                }
            }
        ?>
    </div>
</body>
</html>
