<?php

// MySQL connection information

// $servername = "localhost";
// $username = "root";
// $password = "admin";
// $dbname = "employees";

//$servername = "us-cdbr-east-03.cleardb.com";
//$username="bf538b6a375e50";
//$password="aea2be8c";
//$dbname="heroku_6c5f9579891d89d";

$url = parse_url(getenv("DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$dbname = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $dbname);
//echo "Extracted Info $server $username $password $dbname<br>";
?>
