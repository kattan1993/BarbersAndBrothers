<?php
/**
 * Created by PhpStorm.
 * User: M_Kattan
 * Date: 2018-09-27
 * Time: 10:32 AM
 */


function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>

