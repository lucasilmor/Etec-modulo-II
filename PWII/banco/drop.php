<?php

	$con = mysqli_connect("localhost", "root");
	#$sql = "DROP DATABASE dbLivraria";

	if (mysqli_query($con, $sql)) {
		echo "SE FODEU";
	}else{
		echo "ERRO";
	}
	
	mysqli_close($con);

  ?>