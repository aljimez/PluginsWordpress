<?php
function sestart_plugin_reg()
{
$outreg='   
 <form action="register.php" method="post">
    <table>
        <tr>
            <td colspan="2"><label>Registre</label></td>
        </tr>
        <tr>
            <td><label>Nombre</label></td>
        </tr>
        <tr>
            <td><input type="text" name="full_name" style="width: 10em;"></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
        </tr>
        <tr>
            <td><input type="email" name="email" style="width: 10em;"></td>
        </tr>
        <tr>
            <td><label>Usuario</label></td>
        </tr>
        <tr>
            <td><input type="text" name="user" style="width: 10em;"></td>
        </tr>
        <tr>
            <td><label>Contraseña</label></td>
        </tr>
        <tr>
            <td><input type="password" name="textpassword" style="width: 10em;"></td>
        </tr>
       
        <tr>
            <td><input type="password" name="regcode" style="width: 10em;" value="código de registro"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Registrar"></td>
        </tr>
    </table>
</form>
';
}

$wordpress_page = array(
    'post_title' => 'Registro',
    'post_content' => $outreg,
    'post_status' => 'publish',
    'post_author' => 1,
    'post_type' => 'page',
    );
    wp_insert_post($wordpress_page);
?>