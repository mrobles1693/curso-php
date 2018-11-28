<?php
/*
 * $_GET -> Nos va a permitir capturar parámetros pasados vía url
 */

$nombre = null;
if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}
$apellidos = null;
if(isset($_GET['apellidos'])){
    $apellidos = $_GET['apellidos'];
}

?>

<form method="GET" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
    <table>
        <tr>
            <td>Nombre: </td>
            <td><input type='text' name='nombre'></td>
        </tr>
        <tr>
            <td>Apellidos: </td>
            <td><input type='text' name='apellidos'></td>
        </tr>
    </table>
    <input type='submit' value="Enviar">
</form>

<strong><?php echo $nombre.' '.$apellidos; ?></strong><br>

<a href='1-Get.php?nombre=Fernando&apellidos=Gallardo Cruz'>Obtener Nombre</a>