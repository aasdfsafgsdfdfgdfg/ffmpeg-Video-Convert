<?php 
/*
	*	Map       : ffmpeg ile Video Dönüştürme
	*	Coder     : Cengiz Akcan
	*	Facebook  : facebook.com/cengizakcan1996
	*	Mail      : adana.web.software@gmail.com
*/

// Step 1 

// ffmpeg file path 
$ffmpeg = "C:\\ffmpeg\\bin\\ffmpeg";

// Step 2
$cmd = "$ffmpeg -i ders.avi  ders.mp4";


// Step 3

$cmd = "$ffmpeg -i audio.mp4  output.avi";



// Step 4
shell_exec($cmd);

?>
