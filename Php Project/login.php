<?php
 
   require_once 'menu.php';
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=l">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

<form action="log.php" method="post" data-netlify="true">
 <div class="form">

 <h2>Login</h2>
 <div class="user">
  <h4>Username</h4>
  <input type="text" name="username" placeholder="Username...." require autocomplete="off">
 </div>
 <div class="user">
  <h4>Password</h4>
  <input type="password" name="pass"  placeholder="Password...." require autocomplete="off">
 </div>
 <div class="bnt">
  <button id="btn">Login</button>
 </div>
</form>

</div>

</body>
</html>