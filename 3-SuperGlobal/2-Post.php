<?php 
    $titulo = null;
    if(isset($_POST['titulo'])){
        $titulo = $_POST['titulo'];
    }
    
    $comentario = null;
    if(isset($_POST['comentario'])){
        $comentario = $_POST['comentario'];        
    }
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td>Titulo</td>
            <td><input type='text' name="titulo"></td>
        </tr>
        <tr>
            <td>Comentario</td>
            <td><textarea  name="comentario"></textarea></td>
        </tr>
    </table>
    <input type='hidden' name='formulario'>
    <input type='submit' value='Enviar'>
</form>

<strong><?php echo $titulo.' '.$comentario;?></strong>