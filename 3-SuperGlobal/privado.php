<?php

session_start();

if(empty($_SESSION['usuario'])){
    session_start();
    session_destroy();
    header('location: 5-Session.php');
}else{
    echo "<strong>Bienvenido ".$_SESSION['usuario']."</strong>";
}

if(isset($_POST['cerrar_sesion'])){
    session_start();
    session_destroy();
    header('location: 5-Session.php');
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="hidden" name="cerrar_sesion">
    <input type="submit" value="CERRAR SESION">
</form>