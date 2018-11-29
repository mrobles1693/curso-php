<?php

$resultado = null;
if(!empty($_COOKIE['galleta'])){
    $resultado = $_COOKIE['galleta'];
}

if(isset($_GET['crear']) && $_GET['crear']=='true'){
    setcookie('galleta', 'Soy una cookie', time()+(60*60*24));
    header('location: 4-Cookie.php');
}

if(isset($_GET['eliminar']) && $_GET['eliminar']=='true'){
    setcookie('galleta', null, time()-(60*60*24));
    header('location: 4-Cookie.php');
}

?>

<strong><?php echo $resultado;?></strong>

<a href='?crear=true'>Crear Cookie</a>
<a href='?eliminar=true'>Eliminar Cookie</a>

<a href='../index.php'>Index</a>