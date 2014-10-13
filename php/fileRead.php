<?php
$filename = "C:/Users/390607/Desktop/tmp.txt";
$file = fopen ( $filename, "r" );
if ($file == false) {
	echo ("Error in opening file");
	exit ();
}
$filesize = filesize ( $filename );
$filetext = fread ( $file, $filesize );

fclose ( $file );

echo ("File size : $filesize bytes");
echo ("<pre>$filetext</pre>");


?>