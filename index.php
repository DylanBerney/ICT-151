<?php
/**
 * Index.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 16.12.2019 14:23
 */

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            require "controler/controlerUser.php";
            home();
            break;
        case 'login' :
            require "controler/controlerUser.php";
            login();
            break;
        case 'register':
            require "controler/controlerUser.php";
            register();
            break;
        case 'snows':
            require "controler/controlerSnow.php";
            showSnowAll();
            break;
        default :
            home();
    }
}
else
{
    require "controler/controlerUser.php";
    home();
}
?>