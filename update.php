<?php	
	$college = $_GET['college'];
	$dept = $_GET['dept'];
	$myfile = fopen("seats.txt", "r") or die("Unable to open file!");
	$seats = fgets($myfile);
	fclose($myfile);
	$seats = array_map('intval', explode(';', $seats));
	if($college == "pes" && $dept == "cs"){
		$seats[0]-=1;
	}
	else if($college == "pes" && $dept == "ece"){
		$seats[1]-=1;
	}
	else if($college == "rv" && $dept == "cs"){
		$seats[2]-=1;
	}
	else if($college == "rv" && $dept == "ece"){
		$seats[3]-=1;
	}
	$res = implode(";",$seats);
	//$file = fopen("seats.txt","w");
	//fwrite($file,$res) or die("giki is a fag");
	//fclose($file);
	$file = 'seats.txt';
	// Open the file to get existing content
	// Append a new person to the file
	// Write the contents back to the file
	file_put_contents($file, $res) or die("giki");
?>
