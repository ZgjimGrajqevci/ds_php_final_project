<?php

include_once('config.php');

if(isset($_POST['submit']))
{
    $name  = $_POST['name'];
    $surname  = $_POST['surname'];
    $email  = $_POST['email'];

    $tempPass = $_POST['password'];
    $password = password_hash($tempPass,PASSWORD_DEFAULT);

    $tempPass = $_POST['confirm_password'];
    $confirm_password = password_hash($tempPass,PASSWORD_DEFAULT);

    $sql = "INSERT INTO loginsadh(name,surname,email,password,confirm_password) VALUES (:name,:surname,:email,:password,:confirm_password)";

    $insertSql = $conn->prepare($sql);

    $insertSql->bindParam(':name', $name);
    $insertSql->bindParam(':surname', $surname);
    $insertSql->bindParam(':email', $email);
    $insertSql->bindParam(':password', $password);
    $insertSql->bindParam(':confirm_password', $confirm_password);

    $insertSql->execute();

    ?>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            The data have been successfully added, <a href="login.php" class="alert-link">click right here to login.</a>
        </div>
        <div>
            <img src="assets/images/sadhdance.gif" style="max-width: 700px;" class="col-sm-12">
        </div>
    </div>
    <?php
}
else
{
    ?>

    <div class="text-center">
        <div class="alert alert-success" role="alert">
            The data could not be added, <a href="login.php" class="alert-link">click right here to try again.</a>
        </div>
    </div>
    <?php
}

?>




