
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="food">
</head>

<?php

include_once 'header.php';
include  'functions.php';


?>

<div style="padding-left:16px">
  <h2>Food</h2>
  <p>Food content will go here</p>
    <h2>Testing Meta For Food Ads</h2>

    <p>Advert Displayed Below:</p>

    <?php

    $tags = get_meta_tags('food.php');
    $keywordTag = $tags['keywords'];

    echo getRandomAd($keywordTag);

    ?>




    <br><br><br><button onClick="window.location.reload();">Refresh Page</button>
</div>

</body>
</html>
