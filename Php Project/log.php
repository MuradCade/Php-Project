<?php
require 'conn.php';

$username = $_POST['username'];

$passwd = $_POST['pass'];



$result = mysqli_query($conn,"SELECT * FROM login Where  username = '$username'and pass = '$passwd'");



$row = mysqli_fetch_array($result);

if($row['username'] == "" and $row['pass'] == ""){
    header("Location:login.php?login=error&enterusername&password?");
}

else if($row['username'] != $username or $row ['pass'] != $passwd){
    header("Location: login.php?login=Error&Wrong&Username&Password");
}

else if($row['username'] == $username and $row['pass'] == $passwd){
    // header("Location: login.php?login=sucess&Welcome_Mr ".$username);
    header("Location: dash.php?login=dashboard");
}

else{
    header("Location: login.php?login=error");
}

