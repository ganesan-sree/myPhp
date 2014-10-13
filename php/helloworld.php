<html>
<head>
<title>Hello World</title>


<body>
<?php
echo "Hello, World! \r\n";
echo nl2br("\n");
function brk(){
	echo nl2br("\n");
}

echo nl2br("Constants Example \n");
define("MINSIZE", 50);
echo MINSIZE;
brk();
echo "constant MinSize value== ". constant("MINSIZE"); // same thing as the previous line
brk();
echo "currentline number== " .__LINE__;
brk();
echo "current File == " .__FILE__;
brk();
echo "current Function== " .__FUNCTION__;
brk();
echo "current Class== " .__CLASS__;
brk();
echo "current Method== " .__METHOD__;


dipaly("if else");

$d=date("D");
if ($d=="Fri")
	echo "Have a nice weekend!";
else
	echo "Have a nice day!";


dipaly("switch");

$d=date("D");
switch ($d)
{
	case "Mon":
		echo "Today is Monday";
		break;
	case "Tue":
		echo "Today is Tuesday";
		break;
	case "Wed":
		echo "Today is Wednesday";
		break;
	case "Thu":
		echo "Today is Thursday";
		break;
	case "Fri":
		echo "Today is Friday";
		break;
	case "Sat":
		echo "Today is Saturday";
		break;
	case "Sun":
		echo "Today is Sunday";
		break;
	default:
		echo "Wonder which day is this ?";
}


dipaly("for");



$a = 0;
$b = 0;

for( $i=0; $i<5; $i++ )
{
	$a += 10;
	$b += 5;
}
echo ("At the end of the loop a=$a and b=$b" );




dipaly("while");



$i = 0;
$num = 50;

while( $i < 10)
{
	$num--;
	$i++;
}
echo ("Loop stopped at i = $i and num = $num" );


dipaly("foreach");

$array = array( 1, 2, 3, 4, 5);
foreach( $array as $value )
{
	echo "Value is $value <br />";
}

dipaly("Associative Arrays");

/* First method to associate create array. */
$salaries = array(
		"mohammad" => 2000,
		"qadir" => 1000,
		"zara" => 500
);

echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
echo "Salary of zara is ".  $salaries['zara']. "<br />";

/* Second method to create array. */
$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";

echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
echo "Salary of zara is ".  $salaries['zara']. "<br />";



dipaly("Multidimensional Arrays");



$marks = array(
		"mohammad" => array
		(
				"physics" => 35,
				"maths" => 30,
				"chemistry" => 39
		),
		"qadir" => array
		(
				"physics" => 30,
				"maths" => 32,
				"chemistry" => 29
		),
		"zara" => array
		(
				"physics" => 31,
				"maths" => 22,
				"chemistry" => 39
		)
);
/* Accessing multi-dimensional array values */
echo "Marks for mohammad in physics : " ;
echo $marks['mohammad']['physics'] . "<br />";
echo "Marks for qadir in maths : ";
echo $marks['qadir']['maths'] . "<br />";
echo "Marks for zara in chemistry : " ;
echo $marks['zara']['chemistry'] . "<br />";


dipaly("String Concatenation Operator");

$string1="Hello World";
$string2="1234";
echo $string1 . "  " . $string2;
brk();
echo strlen("Hello world!");
brk();
echo strpos("Hello world!","world");
brk();



dipaly("Identifying Browser & Platform");

$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{
	$browser = "Internet Explorer";
}
else if(  preg_match( "/Netscape/i", "$viewer" ) )
{
	$browser = "Netscape";
}
else if(  preg_match( "/Mozilla/i", "$viewer" ) )
{
	$browser = "Mozilla";
}
$platform = "An unidentified OS!";
if( preg_match( "/Windows/i", "$viewer" ) )
{
	$platform = "Windows!";
}
else if ( preg_match( "/Linux/i", "$viewer" ) )
{
	$platform = "Linux!";
}
echo("You are using $browser on $platform");


function dipaly($name) {
	brk ();
	brk ();
	echo "<h3>" . $name . "</h3>";
	brk ();
}


dipaly("Dynamic Function Calls:");

function sayHello()
{
	echo "Hello<br />";
}
$function_holder = "sayHello";
$function_holder();

?>

</body>
</html>