<?php

include_once 'conn.php';

$username = $_POST['username'];
$email = $_POST['mail'];
$passwd = $_POST['pass'];
$passwd_rep = $_POST['pass_rep'];



if($username == "" and $email == "" and $passwd == "" and $passwd_rep == ""){
    header("Location: signup.php?signup=Erro&Inputdata");
}


if($passwd != $passwd_rep){
    header("Location: signup.php?signup=Error&TryAgain&Later");
}

else if($username != "" and $email != "" and $passwd != "" and $passwd_rep != ""){
    $sql = "INSERT INTO  login (username,email,pass,pass_rep) VALUES('$username', '$email' , '$passwd', '$passwd_rep');";
    mysqli_query($conn,$sql);

    header("Location: signup.php?signup=sucess");
}


