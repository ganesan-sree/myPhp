<?php
require ("Books.php");

$physics = new Books ();
$maths = new Books ();
$chemistry = new Books ();

$physics->setTitle ( "Physics for High School" );
$chemistry->setTitle ( "Advanced Chemistry" );
$maths->setTitle ( "Algebra" );

$physics->setPrice ( 10 );
$chemistry->setPrice ( 15 );
$maths->setPrice ( 7 );

$physics->getTitle ();
$chemistry->getTitle ();
$maths->getTitle ();
$physics->getPrice ();
$chemistry->getPrice ();
$maths->getPrice ();


$novel = new Novel ();



?>