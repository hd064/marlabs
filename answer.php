<?php	
	$ans = $_POST;
	var_dump($ans);
	$oringinal=array(option1=>[a,b],option2=>[a,b],option3=>[a,b],option4=>[a,b],option5=>[a,b],option6=>[a,b],option7=>[a,b],option8=>[a,b],option9=>[a,b],option10=>[a,b]);
	echo 
	$output="[";
	for($i=1;$i<11;$i++){
		$j=0;
		$output.='{"option'.$i.'":[';
		$str='option'.$i;
		if($ans[$str][$j]===null){
			$output.=',';
		}
		while($ans[$str][$j]==="a"||$ans[$str][$j]==="b"||$ans[$str][$j]==="a"||$ans[$str][$j]==="d"){
			$output=$output.'"'.$ans[$str][$j].'",';
			$j++;
		}
		$output=substr($output, 0, -1)."]},";
	}
	$output=substr($output, 0, -1)."]";
	echo($output);
	$myfile = fopen("SampleQ.txt", "r") or die("Unable to open file!");
	$str = fread($myfile,filesize("SampleQ.txt"));
?>