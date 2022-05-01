<?php

include "functions.php";

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="music">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

<div class="topnav">
    <a href="food.php">Food</a>
    <a href="footy.php">Footy</a>
    <a href="countries.php">Countries</a>
    <a class="active" href="music.php">Music</a>
</div>


<h2>Testing Meta For Food Ads</h2>

<p>Advert Displayed Below:</p>

<?php

$tags = get_meta_tags('music.php');
$keywordTag = $tags['keywords'];

echo getRandomAd($keywordTag);

?>




<br><br><br><button onClick="window.location.reload();">Refresh Page</button>



</body>
</html>