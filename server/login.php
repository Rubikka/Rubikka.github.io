<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
<form action="indexlogin.php" method="post">
    <h2>LOGIN</h2>
    <?php if (isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error'];?></p> <?php   }?>
    <label>User name</label>
    <input type="text" name="uname" placeholder="User Name"><br>

    <label>User name</label>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>

</body>
</html>