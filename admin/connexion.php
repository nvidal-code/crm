<?php
    require_once('../include/config.php');
    session_start();
    
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        echo '1er if username : ' . $username . '<br />';
        $password = $_POST["password"];
        echo '1er if password : ' . $password . '<br />';
        
        $sql = "SELECT password, id FROM adminuser WHERE username = :username";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch();
        $isValid = password_verify($password, $result[0]);
        
        if ($isValid) {
            $_SESSION['isAdmin'] = true;
            $_SESSION['authUser'] = $username; 
            $_SESSION['id'] = $result[1];
            header('Location: ./admin.php');
        }
        else {
            echo 'Mauvais pass';
        }       
    }
?>