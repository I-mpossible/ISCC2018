<?php

include "flag.php";

if ($_SERVER["REQUEST_METHOD"] != "POST")
	die("flag is here");

if (!isset($_POST["flag"]) )
	die($_403);

foreach ($_GET as $k => $v){
	$$k = $$v;
}

foreach ($_POST as $k => $v){
	$$k = $v;
}

if ( $_POST["flag"] !== $flag )
	die($_403);

echo "flag: ". $flag . "\n";
die($_200);

?>