<html>
<head>
    <title>Login</title>
</head>
<body>
<div align="center">
    <?php include_once './../views_models/header.php'?>
    <h1 class="hText"> Login </h1>
    <form action="../Controllers/LoginController.php" method="post">
        <input name="username" type="text" placeholder=" Put your username..."><br>
        <input name="password" type="password" placeholder=" Put your password..."><br>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>
