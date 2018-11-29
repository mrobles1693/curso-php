<?php ?>

<h1>Inicio de sesion</h1>
<strong>Usuario=root : Password=toor</strong>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <table border="0">
        <tr>
            <th>Usuario: </th>
            <th><input type="text" name="usuario"></th>
        </tr>

        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"></td>
        </tr>

    </table>
    <input type="hidden" name="login">
    <input type="submit" value="ENVIAR"/>
</form>