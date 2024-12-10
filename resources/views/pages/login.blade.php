
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <h2>S.K Shoes</h2>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <span>
            <div class="input-group">
                <input type="submit" name="login" class="btn" value="Login">
            </div>
            
        </form>
    </div>
</body>
</html>
