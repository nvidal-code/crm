<?php
$dbh;
try {
    $dbh = new PDO('mysql:host=defourscikcrm.mysql.db;dbname=defourscikcrm', "defourscikcrm", "Defours73");
  
    //$dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>