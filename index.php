<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400|Lobster|Nova+Flat" rel="stylesheet"> 

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<style type="text/css">
ul{
  padding:0px;
  margin:0;
}
li{
  list-style-type: none;
  padding:5px;
  overflow: hidden;
  max-height: 50px;
  height:50px;
  margin-top: 5px;
  text-align: right;
  border-bottom:1px solid rgba(0,0,0,0.2);
  
}
  li p{
    font-family: 'Comfortaa', cursive;
    font-size:16px;
    position: relative;
    z-index:10;
    display:inline-block;
    background:rgba(0,0,0,0);
    width:200px;
    height:auto;
    top:14px;
    left:-220px;
padding:0px;
margin:0;
  }
  .skillslist{
    background:rgba(255,255,255,0.3);
  }
</style>

</head>
<?php

include('progress-bar-style.php');


?>

<body>
<div style="max-width:360px; margin:auto; padding-top:20px; background:rgba(0,0,0,0.2); height:480px;">
  <p style="font-family:helvetica; text-align:center;">JavaScript Progress Bar Array</p>
<ul class="skillslist">
  <li><p>Sketch</p>
<div class="myProgress1">
  <div class="myBar"></div>
</div>
</li>

<li><p>PhotoShop</p>
<div class="myProgress2">
  <div class="myBar"></div>
</div>
</li>

<li><p>Illustrator</p>
<div class="myProgress3">
  <div class="myBar"></div>
</div>
</li>

<li><p>MockPlus</p>
<div class="myProgress4">
  <div class="myBar"></div>
</div>
</li>

<li><p>Premiere Pro</p>
<div class="myProgress5">
  <div class="myBar"></div>
</div>
</li>

<li><p>InDesign</p>
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