<?php
	//kõik AB'iga seonduv
	
	function welcomeUser($name, $age){
		echo "Tere ".$name.", kelle vanus on ".$age."<br>";
		echo $first_name;
	}
	
	echo $age;
	
	$first_name = "Juku";
	welcomeUser($first_name, 1);
	
	$first_name = "Juhan";
	welcomeUser($first_name, 10);
	
	welcomeUser("Jan", 20);
	
?>