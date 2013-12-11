<?php 

	$file = 'http://localhost/camera/inzip.zip';
	$newfile = 'tmp_file.zip';

	if (!copy($file, $newfile)) {
	    echo "failed to copy $file...\n";
	}

	$zip = new ZipArchive;
	$zip->open($newfile);

	$zip->extractTo("..");
	$zip->close();
 ?>