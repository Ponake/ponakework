

<?php 
	$server = "us-cdbr-east-03.cleardb.com";
	$username="b3cc1c5ad0af56";
	$password="87d9d6df";
	$dbname="heroku_4076c8df474b3c7";
    // Create connection
    $connect = new mysqli($server, $username, $password, $dbname);

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM user";
    $result = $connect->query($sql);
	
	while($row = $result->fetch_assoc()):
	echo $row['username']; 
	echo "<br>";
	endwhile
?>