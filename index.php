<?php require_once './1-lenguaje/10-OrientadoObjetos.php'?>
<?php require_once './1-lenguaje/11-Herencia.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MI PRIMERA APP PHP</title>
    </head>
    <body>
        <?php
            $persona = new Persona();
            echo 'Nombre: '.$persona->nombre().'<br>';
            echo 'Apellido: '.$persona->apellido().'<br>';
            $persona->edad = 20;
            echo 'Edad: '.$persona->edad().'<br>';
        ?>
        
        <h3>Persona Deportista</h3>
        
        <?php
            $deportista = new Deportista;
            $deportista->edad = 25;
            echo 'Edad: '.$deportista->edad.'<br>';
            $deportista->altura = 1.70;
            echo 'Altura: '.$deportista->altura.'<br>';
            $deportista->pais = 'Peru';
            echo 'Pais: '.$deportista->pais.'<br>';
            $deportista->deporte = 'Basketball';
            echo 'Edad: '.$deportista->deporte.'<br>';
        ?>
    </body>
</html>
