<?php

$myfile = fopen("SampleQ.txt", "r") or die("Unable to open file!");
$str = fread($myfile,filesize("SampleQ.txt"));
$pie = explode("\n",$str);
$length = count($pie);
$output="[";
for($i=0;$i<$length;$i++) {
	if(substr($pie[$i], 0, 1) === "Q"){
		if($i===0){
			$output.='{"question":"'.$pie[$i].'",';
		}else{
			$output=substr($output, 0, -1);
			$output.='},{"question":"'.$pie[$i].'",';
		}
	}else {
		if(substr($pie[$i], 0, 2) === "an"){
		}
		else{
			$output.='"'.substr($pie[$i], 0, 1).'":"'.$pie[$i].'",';
		}
	}
}
$output=substr($output, 0, -1)."}]";
echo $output;

?>