<?php
$resultado = null;
if (isset($_POST['formulario'])) {
    $name = $_FILES['imagen']['name'];
    $tmp_name = $_FILES['imagen']['tmp_name'];
    $error = $_FILES['imagen']['error'];
    $size = $_FILES['imagen']['size'];
    $max_size = 1024 * 1024 * 1;
    $type = $_FILES['imagen']['type'];
    
    if($error){
        $resultado = "$error - Hubo un error";
    } else if($size > $max_size){
        $resultado = "$size - El archivo es demasiado grande";
    } else if($type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif'){
        $resultado = "$type - Solo se aceptan jpg, png o gif.";
    } else  {
        $ruta = "files/$name";
        move_uploaded_file($tmp_name, $ruta);
        $resultado = "La imagen $name ha sido guardada con exito";
    }
}
?>

<strong><?php echo $resultado; ?></strong>

<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Subir imagen: <input type="file" name="imagen">
    <input type="hidden" name="formulario">
    <input type="submit" value="SUBIR">
</form>