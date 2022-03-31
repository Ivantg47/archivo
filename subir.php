<?php

	$filename = $_FILES['archivo']['name'];
	$filetmpname = $_FILES['archivo']['tmp_name'];
	$filetype = $_FILES['archivo']['type'];
	$filesize = $_FILES['archivo']['size'];
	$imagen = "img/".$filename;

	if ($filetype == "image/jpeg" && $filesize <= 2000000) {
		move_uploaded_file($filetmpname, $imagen);
		echo "<img src='$imagen' height=80% width=80% />";
	} else {
		echo "La imagen no cumple con lo solicitado";
	}
	
?>