<?php
	$connect = new mysqli("localhost", "benart", "secura","secura"); 
	if ($connect != null) {
		echo "connected";
		}
	else{echo "failed";}
	
	$query = $connect -> query("SELECT * FROM logs");

	echo "<table><tr><th>ID</th><th>name</th><th>cassusBelli</th></tr>";
	while ($row = $query->fetch_assoc()){
		echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["cassusBelli"]."</td></tr>";
	}
	echo "</table>"
?>
