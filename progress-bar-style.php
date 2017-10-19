<?php
switch (4) {
    case 2:
    $cs_00="#F2F2F2";
    $cs_01="#F2F2F2";
    $cs_02="#2F343B";
    $cs_03="#405F59";
    $cs_04="#A3D0C1";
    $font_color="#000";
    $font_color2="#fff";
    $cs_hi = "#A3D0C1";
    $cs_tint = "#A3D0C1";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "mellow";
    break;
    case 3:
    $cs_00="#1b1f20";
    $cs_01="#242C38";
    $cs_02="#2F343B";
    $cs_03="#7E827A";
    $cs_04="#7E827A";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#FD775A";
    $cs_tint = "#FD775A";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/curls.png";
    $schematic = "vintage";
    break;
    case 4:
    $cs_00="#324D5C";
    $cs_01="#46B29D";
    $cs_02="#F0CA4D";
    $cs_03="#E37B40";
    $cs_04="#DE5B49";
    $font_color="#fff";
    $font_color2="#000";
    $cs_hi = "#F0CA4D";
    $cs_tint = "#F0CA4D";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "pineapple";
    break;
     case 5:
    $cs_00="#DBEFE7";
    $cs_01="#B2C8C6";
    $cs_02="#F2F3F2";
    $cs_03="#0b2b35";
    $cs_04="#D6CCBC";
    $font_color="#000";
    $font_color2="#000";
    $cs_hi = "#0b2b35";
    $cs_tint = "#0b2b35";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "blanca";
    break;
    case 6:
    $cs_00="#1F618C";
    $cs_01="#2C3E50";
    $cs_02="#E74C3C";
    $cs_03="#ECF0F1";
    $cs_04="#1F618C";
    $font_color="#fff";
    $font_color2="#fff";
    $cs_hi = "#E74C3C";
    $cs_tint = "#ffffff";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "honeypot";
    break;
     case 7:
    $cs_00="#272F32";
    $cs_01="#9DBDC6";
    $cs_02="#FFFFFF";
    $cs_03="#FF3D2E";
    $cs_04="#DAEAEF";
    $font_color="#000";
    $font_color2="#000";
    $cs_hi = "#FF3D2E";
    $cs_tint = "#FF3D2E";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "futurama";
    break;
    default:
    $cs_00="#DBEFE7";
    $cs_01="#C1D4D2";
    $cs_02="#F2F3F2";
    $cs_03="#A69B8C";
    $cs_04="#D6CCBC";
    $font_color="#fff";
    $font_color2="#1b1f20";
    $cs_hi = "#4CC1BB";
    $cs_tint = "#DBEFE7";
    $cs_texture = "https://www.toptal.com/designers/subtlepatterns/patterns/round.png";
    $schematic = "arctic";
}

$config = array(
"bar1" => "40",
"bar2" => "60",
"bar3" => "100",
"bar4" => "60",
"bar5" => "70",
"bar6" => "45"
);

// total number of bars within the array (+1 for array) - used for array control 
$total = 6+1;


echo "
<style type='text/css'>
";
/* These elements will loop and iterate by 1 */
//$i will pass ID value
for ($i=0; $i<=$total; $i++){
  echo "
.myProgress$i {
  width: 50%;
  margin-left:40%;
  background-color: rgba(0,0,0,0.8);
  border-radius:20px;
  overflow: hidden;
  border:2px solid transparent;
}
";
}
/* End loop */
/* general styling */
echo "
.myBar {
  transition:0.9s ease all;
  width: 1%;
  height: 30px;
  background-color: $cs_00;
  border:2px solid none;
  border-radius:20px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  
}
.myBarFill{
  transition:0.9s ease all;
  width: 0%;
  height: 30px;
  background-color: #fff;
  border:2px solid none;
  border-radius:20px;
   border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  
background: green; /* Old browsers */
background: -moz-linear-gradient(left, $cs_00 0%, $cs_04 50%, $cs_hi 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, $cs_00 0%,$cs_04 50%,$cs_hi 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, $cs_00 0%,$cs_04 50%,$cs_hi 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='$cs_00', endColorstr='$cs_hi',GradientType=1 ); /* IE6-9 */
}
";

/* These elements will also loop and iterate by 1 */
/* This for loop steps through config array to find the current progress % and applies it to the current bar*/

for ($j2=1; $j2<$total; $j2++){
  $x2 = $config['bar'.$j2];
//echo $x2;
echo "
.myProgress$j2 .myBarFill{
width: $x2%;
  }
";
}

echo "
</style>
  ";
  ?>