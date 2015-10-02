<?php
	//kõik AB'iga seonduv
	
	function welcomeUser($first_name){
		echo "Tere ".$first_name;
	}
	
	$first_name = "juku";
	welcomeUser($first_name);
	$first_name = "juhan";
	welcomeUser($first_name);
	
?>