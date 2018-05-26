<?php
	$s = explode(" ",$argv[1]);
	switch($s[1]){
		case '+':
			$a = $s[0]+$s[2];
			echo "$a";
			break;
		case '-':
			$a = $s[0]-$s[2];
			echo "$a";
			break;
		case '*':
			$a = $s[0]*$s[2];
			echo "$a";
			break;
		case '/':
			$a = $s[0]/$s[2];
			echo "$a";
			break;
		
	}
	
?>