<?php
/*
Plugin Name: inises
Description: Plugin con inicio de sesion
version: 1.0
*/
function myPlugin( $post ) {
    global $pagenow;
    if (is_admin() ) {
        echo "No more alerts when its wrapped this way";
        }
        register_activation_hook('sestart.php' , array('sestart_plugin_inic','sestart_plugin_reg'));
    }


//register_activation_hook('regis.php','sestart_plugin_reg');

?>

