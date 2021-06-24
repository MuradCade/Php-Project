<!-- contains what will appears on dashboard  -->
<?php
     include_once 'dash.php';
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="content.css">
    <title>Home</title>
</head>
<body>
<h1 class="h1">Welcome To My Website</h1>

<div class="pro1">
    <h4>Project1</h4>
    <h4>Create Simple Login Form Using Only Javascript</h4>
     <button class="btn1" onclick="check1()">Click</button>
     <h5 id="msg1"></h5>
</div>

<div class="pro2">
    <h4>Project2</h4>
    <h4>Create Simple Login Form Using Only Javascript</h4>
     <button class="btn2" onclick="check2()">Click</button>
     <h5 id="msg2"></h5>
</div>

<div class="pro3">
      <h4>Project3</h4>
    <h4>Create Simple Login Form Using Only Javascript</h4>
     <button class="btn3" onclick="check3()">Click</button>
     
     <h5 id="msg3"></h5>
</div>

<script>

function check1(){
    document.getElementById('msg1').innerHTML = "Signup Or Login To See Our Projects";
}

function check2(){
    document.getElementById('msg2').innerHTML = "Signup Or Login To See Our Projects";
}

function check3(){
    document.getElementById('msg3').innerHTML = "Signup Or Login To See Our Projects";
}
</script>

</body>
</html>