
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="indexStuff">
</head>

<?php

include_once 'header.php';
include  'functions.php';


?>
//test the ads
<div style="padding-left:16px">
  <h2>Home</h2>
  <p>Home content will go here</p>

    <h2>Testing Meta For Index Ads</h2>

    <p>Advert Displayed Below:</p>

    <?php

    $tags = get_meta_tags('index.php');
    $keywordTag = $tags['keywords'];

    echo getRandomAd($keywordTag);

    ?>




    <br><br><br><button onClick="window.location.reload();">Refresh Page</button>


</div>
</body>
</html>
