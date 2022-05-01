<?php


function getRandomAd($keywords)
{

        $servername = 'localhost';
        $username = 'dmccann37';
        $password = 'W5F3lr0ZDs3wb3xS';
        $dbname = 'dmccann37';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



    $randomAd = rand(1, 5);

    $sql = "SELECT ad FROM $keywords WHERE id= $randomAd";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["ad"]. "<br>";
        }
    } else {
        echo "0 results";
    }















}








