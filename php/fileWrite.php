<?php
$filename = "C:/Users/390607/Desktop/newfile.txt";
$file = fopen( $filename, "w+" );
if( $file == false )
{
	echo ( "Error in opening new file" );
	exit();
}
fwrite( $file, "This is  a simple test\n" );
fclose( $file );
?>

<html>
<head>
<title>Writing a file using PHP</title>
</head>
<body>

<?php
if(( $filename ))
{
   $filesize = filesize( $filename );
   $msg = "File  created with name $filename ";
   $msg .= "containing $filesize bytes";
   echo ($msg );
}
else
{
   echo ("File $filename does not exit" );
}

?>