<?php
	$arr = array("Alexey", "Oleg", "Maria", "Aibek");
	$temp = "";

	for($i=0; $i<sizeof($arr)-1; $i++){

		if(strlen($arr[$i]) > strlen($arr[$i+1])){
		
			$temp = $arr[$i];
			$arr[$i] = $arr[$i+1];
			$arr[$i+1] = $temp;
		}
	}

	foreach($arr as $value){
		echo $value."\n";
	}
?>