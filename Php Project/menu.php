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


    <style>
        *{
    margin: 0;
    padding:0;
    box-sizing: border-box;
}

body{
    background-color: teal;
}
.menu{
    width:300vh;
    height: 80px;
    background-color: black;
   
   
}


#btn1,#btn2,#btn3,#btn4{

      margin: 8px;
      width:60px;
      height: 40px;
     
      
      
}


#btn1,#btn2,#btn3,#btn4{
    position: relative;
    left:15%;
    margin-left:8%;
    color:white;
    background-color: black;
    bottom:20px;
    border-top:none;
    border-bottom:none;
    border-left:none;
    border-right:none;
 
}
h1{
    color: rgb(64, 221, 90);
    font-family: 'Courier New', Courier, monospace;
    position:relative;
    left:9%;
    top:12px;
}

#btn1,#btn2,#btn3,#btn4:hover{
    cursor: pointer;
}

    </style>

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