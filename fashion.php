
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="fashion">
</head>

<?php

include_once 'header.php';
include  'functions.php';


?>
<div style="padding-left:16px">
  <h2>Fashion</h2>
  <p>Fashion content will go here</p>
    <h2>Testing Meta For Fashion Ads</h2>

    <p>Advert Displayed Below:</p>

    <?php

    $tags = get_meta_tags('fashion.php');
    $keywordTag = $tags['keywords'];

    echo getRandomAd($keywordTag);

    ?>




    <br><br><br><button onClick="window.location.reload();">Refresh Page</button>

</div>

</body>
</html>
