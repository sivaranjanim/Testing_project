<?php
  ini_get('error_reporting');

	ini_set('error_reporting', E_ALL ^ E_NOTICE);
require('rotateImage.php');
if(!empty($_POST[img])) // quick check
{
	$image = $_SERVER[DOCUMENT_ROOT].'/Sample/jquery_rotate/'.$_POST[img];
	$image_rotated = $_SERVER[DOCUMENT_ROOT].'/Sample/jquery_rotate/image_rotated.jpg';
	$angle = preg_replace("/[^0-9]/","", $_POST[angle]) + 0;
	if($angle != 0){
		rotateImage($image,$image_rotated,$angle);
		echo 'saved successfully!<br /><br /><img src="image_rotated.jpg?'.date("U").'">';
	}
}
else
{
	echo 'no image was sent';
}
?>