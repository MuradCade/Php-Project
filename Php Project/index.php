
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Blog</title>
</head>
<body>

    <div class="menu">
      <h1>Blog</h1>
            <button id="btn1" onclick="home()">Home</button>
            <button id="btn2">About</button>
            <button id="btn3" onclick="sign()">Singup</button>
            <button id="btn4" onclick="login()">Login</button>
        
    </div>


    <?php
 
 include_once 'home.php';

?>  

    <script>
        function login(){
            window.location = "login.php";
        }
  
         function sign(){
            window.location = "signup.php";
         }

         function home(){
            window.location = "home.php";
         }
    </script>
</body>
</html>