<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "ctf";
$connect = mysql_connect($host, $user, $pass) or die("Unable to connect");
mysql_select_db($db) or die("error , failed");
session_start();
