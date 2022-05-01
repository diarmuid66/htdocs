<?php


	  $servername = 'localhost';
        $username = 'dmccann37';
        $password = 'W5F3lr0ZDs3wb3xS';
        $databasename = 'dmccann37';


// Create connection

$conn =  mysqli_connect($servername, $username, $password , $databasename);
if (!$conn) {

    die("Connection Failed: " . mysqli_connect_error());
}

echo"connected Successfully";
















