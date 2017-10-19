<?php

// total number of bars within the array - used for array control 
$total = 6+1;

$config = array(
"bar1" => "10",
"bar2" => "60",
"bar3" => "100",
"bar4" => "60",
"bar5" => "70",
"bar6" => "45"
);


echo "
<style type='text/css'>
";
/* These elements will loop and iterate by 1 */
//$i will pass ID value
for ($i=0; $i<=$total; $i++){
  echo "
.myProgress$i {
  width: 50%;
  margin:auto;
  background-color: rgba(0,0,0,0.1);
  border-radius:20px;
  overflow: hidden;
  border:2px solid #1b1f20;
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
  background-color: #8cce82;
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
background: -moz-linear-gradient(left, #8cce82 0%, #75aad6 50%, #ba82f2 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, #8cce82 0%,#75aad6 50%,#ba82f2 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, #8cce82 0%,#75aad6 50%,#ba82f2 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8cce82', endColorstr='#ba82f2',GradientType=1 ); /* IE6-9 */

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