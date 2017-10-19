<html>
<head>
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>


</head>
<?php

include('progress-bar-style.php');


?>

<body>
<div style="max-width:480px; margin:auto; padding-top:20px;">
  <p style="font-family:helvetica; text-align:center;">JavaScript Progress Bar Array</p>

<div class="myProgress1">
  <div class="myBar"></div>
</div>
<br>
<div class="myProgress2">
  <div class="myBar"></div>
</div>
<br>
<div class="myProgress3">
  <div class="myBar"></div>
</div>
<br>
<div class="myProgress4">
  <div class="myBar"></div>
</div>
<br>
<div class="myProgress5">
  <div class="myBar"></div>
</div>
<br>
<div class="myProgress6">
  <div class="myBar"></div>
</div>
<br>
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

// function move() {
//   var elem = document.getElementById("myBar");   
//   var width = 1;
//   var id = setInterval(frame, 10);
//   function frame() {
//     if (width >= 100) {
//       clearInterval(id);
//     } else {
//       width++; 
//       elem.style.width = width + '%'; 
//     }
//   }
// }


</script>

</body>
</html>