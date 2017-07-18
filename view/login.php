<?php
$flag = '';
if(isset($_GET['valid'])){
    if($_GET['valid']=='false'){
        $flag = "Falha no login";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - PCD EcompJr</title>
</head>
<body>
    <form action="../routes/routes.php" method="POST" >
        <input type="text" name="login" placeholder="Login"/>
        <input type="password" name="password" placeholder="Senha" />
        <input type="submit" name="loginAttempt" value="Login"/>
    </form>
    <?php echo $flag; ?>
</body>
</html>