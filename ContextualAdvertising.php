<?php

function ins_adv($text)
{
$txt='';$i=0;
$block = "Here your ad code must be inserted";
// an array consisting of strings which must be replaced with the ad block 
// an array consisting of strings with the ad block which will be inserted 
// between the paragraphs of the article
$arr = array();
$arr1 = array();
foreach ($pieces as $piece) {
	$txt.= $piece;
	// Now check the number of characters in order to comply with rule 4
	//of ad placement in the body of articles 
	if (strlen(strip_tags($txt))>1200)
	{
		// add a separator at the end $tag,
		// i.e. strings are added to the array without it.
		$arr[] = substr($piece, -250).$tag; 
		$arr1[] = substr($piece, -250).$tag.$block;
		$txt=''; $i+=1;
	}
	if ($i==3) {break;}
}
return str_replace($arr, $arr1, $text);
}

?>