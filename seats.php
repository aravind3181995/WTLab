<?php
	$r=rand(0,1);
	$t=1+(9*$r);
	sleep($t);
	$file = fopen("seats.txt","r");
	echo fread($file,filesize("seats.txt"));
	fclose($file);
?>
