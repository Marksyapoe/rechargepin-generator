<?php
	echo "<h1>"."Recharge card generator by Mark SY-apoe"."</h2>";
	$card = 2468013579135789;
	$num = 1;
	 
	while($card <= 6838846913567800){
		echo "<h3>".$num."----".$card."</h3>";
		$num++;
		$card = $card + 21894334567834;
	}	