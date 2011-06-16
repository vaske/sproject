<?php
 $url = "http://api.crunchbase.com/v/1/company/vast.js";
 $main_url = "http://www.crunchbase.com/";
 $homepage = file_get_contents($url);
 $json_dec = json_decode($homepage);
 //echo $json_dec->image;
 
 $pom = 0;
 foreach ( $json_dec->image->available_sizes as $trend )
{
	$dir = "c:\\AppServ\\www\\infostartups\\images\\vast\\";
	if(!is_dir($dir)){
		mkdir($dir, 0777); 
	}
    $full_url = $main_url . $trend[1];
	$img = $dir.$pom.".jpg";
	file_put_contents($img, file_get_contents($full_url));
	$pom++;
}

 /*
 $url = 'http://example.com/image.php';
 $img = '/my/folder/flower.gif'
 file_put_contents($img, file_get_contents($url));
*/
 
?>
