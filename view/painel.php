<?php
session_start();
if(!isset($_SESSION['auth'])){
    header("location:login.php?valid=false");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel de administração</title>
</head>
<body>
    <form action="../routes/routes.php" method="POST">
        <input type="submit" name="logoff" value="Sair" />
    </form>
    <?php
        echo "Você acertou seu login e senha";
    ?>
</body>
</html>