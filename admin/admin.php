<?php
require_once('../include/config.php');
session_start();
// On test les droits du comptes
    if ($_SESSION['isAdmin']) {
        echo "Welcome " . $_SESSION['authUser'];
    }else {
        echo "Get out you're not authorized";
    }  

?>