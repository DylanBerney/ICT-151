<?php
/**
 * Index.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 16.12.2019 14:23
 */

require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login();
            break;
        default :
            home();
    }
}
else
{
    home();
}
?>