<html>
<head>
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<style type="text/css">
ul{
  padding:0px;
  margin:0;
}
li{
  padding:5px;
  overflow: hidden;
  max-height: auto;
  height:auto;
}
  li p{
    font-size:18px;
    font-family: helvetica;
    position: relative;
    display:inline-block;
    background:rgba(0,0,0,0);
    top:20px;
    left:20px;
padding:0px;
margin:0;
  }
</style>

</head>
<?php

include('progress-bar-style.php');


?>

<body>
<div style="max-width:480px; margin:auto; padding-top:20px; background:rgba(0,0,0,0.2); height:480px;">
  <p style="font-family:helvetica; text-align:center;">JavaScript Progress Bar Array</p>
<ul class="skillslist" style="background:red;">
  <li><p>test</p>
<div class="myProgress1">
  <div class="myBar"></div>
</div>
</li>

<li><p>test</p>
<div class="myProgress2">
  <div class="myBar"></div>
</div>
</li>

<li><p>test</p>
<div class="myProgress3">
  <div class="myBar"></div>
</div>
</li>

<li><p>test</p>
<div class="myProgress4">
  <div class="myBar"></div>
</div>
</li>

<li><p>test</p>
<div class="myProgress5">
  <div class="myBar"></div>
</div>
</li>

<li><p>test</p>
<div class="myProgress6">
  <div class="myBar"></div>
</div>
</li>
</ul>
</div>

<br>
<button onclick="fadeOut()">Clear</button> 

<script>


function fadeIn(){
  $('.myBar').addClass('myBarFill')
}
setTimeout(fadeIn, 500);

function fadeOut(){
  $('.myBar').removeClass('myBarFill')
}


</script>

</body>
</html>