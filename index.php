<?php
	$a[] = "a";
	$a[] = "b";
	$a[] = "c";
	$a[] = "d";
	
	$q = $_REQUEST("q");
	$candidate = "";
	
	if($q != ""){
		$q = strtolower($q);
		$len = strlen($q);
		
		foreach($a as $name){
			if(stristr($q, substr($name, 0, $len))){
				if($candidate === ""){
					$candidate = $name;
				}
				else{
					$candidate .= ", $name";
				}
			}
		}
	}
	
	echo $candidate === "" ? "Q___Q" : $candidate;
?>