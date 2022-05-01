
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="sports">
</head>

<?php

include_once 'header.php';
include  'functions.php';


?>
<div style="padding-left:16px">
  <h2>Sports</h2>
  <p>Sports content will go here</p>
    <h2>Testing Meta For Sports Ads</h2>

    <p>Advert Displayed Below:</p>

    <?php

    $tags = get_meta_tags('sports.php');
    $keywordTag = $tags['keywords'];

    echo getRandomAd($keywordTag);

    ?>




    <br><br><br><button onClick="window.location.reload();">Refresh Page</button>

</div>

</body>
</html>
