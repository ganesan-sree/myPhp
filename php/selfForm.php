<?php
if( $_POST["name"] || $_POST["age"] )
{
	echo "Welcome ". $_POST['name']. "<br />";
	echo "You are ". $_POST['age']. " years old.";
	exit();
}

if( $_POST["location"] )
{
	$location = $_POST["location"];
	header( "Location:$location" );
	exit();
}

?>

<html>
<body>
  <form action="<?php $_PHP_SELF ?>" method="POST">
  Name: <input type="text" name="name" />
  Age: <input type="text" name="age" />
     <select name="location">
      <option value="http://w3c.org">
            World Wise Web Consortium
      </option>
      <option value="http://www.google.com">
            Google Search Page
      </option>
   </select>
  <input type="submit" />
  </form>
</body>
</html>