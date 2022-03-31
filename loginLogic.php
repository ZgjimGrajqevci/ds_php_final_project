<?php

include_once('config.php');

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "please fill all the brackets";
    }
    else {
        $sql = "SELECT id, name, surname, email, password FROM loginsadh where email=:email";


        $insertSql = $conn->prepare($sql);

        $insertSql->bindParam(':email', $email);
        $insertSql->execute();

        $current_user = $insertSql->fetch();        

        $hash_password = $current_user['password'];                    

        if (password_verify($password, $hash_password)) {
            $_SESSION['email'] = $email;  
            $_SESSION['fullname'] = $current_user['name'] . $current_user['surname'];
            

            header('Location:index.php');
        }
        else{
            header('Location:error.php');
        }

    }
}

?>