<?php

	$path = 'input_file_for_character_replacement.txt';
	$file_contents = file_get_contents($path_to_file);
	$file_contents = str_replace("s","a",$file_contents);
	file_put_contents($path_to_file,$file_contents);

?>