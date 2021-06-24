<?php
  
      require_once 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=l">
    <link rel="stylesheet" href="signup.css">
    <title>Signup</title>
</head>
<body>


<form action="sign.php" method="post" data-netlify="true">
 
 <div class="form">
 <h2>Signup</h2>
 <div class="user">
  <h4>Username</h4>
  <input type="text" name="username" placeholder="Username...." require autocomplete="off">
 </div>
 <div class="mail">
  <h4>Email</h4>
  <input type="text" name="mail"  placeholder="Email...." require autocomplete="off">
 </div>
 <div class="pass">
  <h4>Password</h4>
  <input type="password" name="pass"  placeholder="password...." require autocomplete="off">
 </div>
 <div class="pass_rep">
  <h4>Repeat Password</h4>
  <input type="password" name="pass_rep"  placeholder="Reapeat Password...." require autocomplete="off">
 </div>
 <div class="bnt">
  <button id="btn">SignUp</button>
 </div>
</form>
</div>
</body>
</html>