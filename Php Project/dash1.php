
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

<style>
    body{
    background-color: #06396777;
    overflow: hidden;
}



.h1{
    font-family: 'Courier New', Courier, monospace;
    color: thistle;
    text-align: center;
    display: flex;
    position: relative;
    justify-content: center;
    position: relative;
    top:10px;
    margin-bottom: 40px;
    font-size: 4rem;
    left:12px;

}

.pro1{
    position: relative;
    width: 40vh;
    height: 50vh;
    background-color: teal;
    left:15%;
    border-radius: 12px;
    box-shadow:20px 20px 20px black;
    
}

h4{
  text-align: center;
  font-size:20px;
  position: relative;
  top:20px;
  margin-bottom: 60px;
}

.btn1{
      width:80px;
      height: 40px;
      background-color: rgb(68, 119, 100);
      text-align: center;
      position: relative;
      top:90px;
      left: 33%;
      font-weight: bolder;
}
.btn2{
    width:80px;
    height: 40px;
    background-color:  rgba(50, 156, 55, 0.664);
    text-align: center;
    position: relative;
    top:90px;
    left: 33%;
    font-weight: bolder;
}

.btn3{
    width:80px;
    height: 40px;
    background-color:  rgba(14, 81, 136, 0.664);
    text-align: center;
    position: relative;
    top:90px;
    left: 33%;
    font-weight: bolder;
}

#msg1{
    position: relative;

    left:10%;
    
}

#msg2{
    position: relative;

    left:10%;
    
}

#msg3{
    position: relative;

    left:10%;
    
}


.pro2{
    width: 40vh;
    height: 50vh;
    background-color: teal;
     position: relative;
     left:45%;
     bottom: 348px;
     border-radius: 12px;
     box-shadow:20px 20px 20px black;
    
}



.pro3{
    width: 40vh;
    height: 50vh;
    background-color: teal;
     position: relative;
     left:75%;
     bottom: 700px;
     border-radius: 12px;
     box-shadow:20px 20px 20px black;
}

.pro1:hover{
    background-color: #d2e94ecb;
    color: #0055ff;
    animation: move 0.6s 0.1s infinite linear;
}

.pro2:hover{
    background-color: hsla(236, 81%, 42%, 0.623);
    color: white;
    animation: move 0.6s 0.2s infinite linear;
}

.pro3:hover{
    background-color: rgba(245, 179, 56, 0.733);
    color: #853f3f;
    font-weight: bolder;
    animation: move 0.6s 0.3s infinite linear;
}

.btn1:hover{
   cursor: pointer;
   background-color: #d2e94ecb;
   color: rgb(0, 0, 0);
}
.btn2:hover{
   cursor: pointer;
   background-color: hsla(236, 81%, 42%, 0.623);
   color: rgb(0, 0, 0);
}
.btn3:hover{
    cursor: pointer;
    background-color:   rgba(245, 179, 56, 0.733);
    color: rgb(0, 0, 0);
   
 }

 @keyframes move {
     50%{
         transform: translate(0,5px);
     }
    
     
     
 }
 
</style>
</body>
</html>