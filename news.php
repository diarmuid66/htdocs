
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="news">
</head>

<?php

include_once 'header.php';
include  'functions.php';


?>
<div style="padding-left:16px">
  <h2>News</h2>
  <p>News Content will be here </p>
    <h2>Testing Meta For News Ads</h2>

    <p>Advert Displayed Below:</p>

    <?php

    $tags = get_meta_tags('news.php');
    $keywordTag = $tags['keywords'];

    echo getRandomAd($keywordTag);

    ?>




    <br><br><br><button onClick="window.location.reload();">Refresh Page</button>

</div>

</body>
</html>
