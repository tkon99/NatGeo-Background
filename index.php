<?php
include('simple_html_dom.php');
$html = file_get_html('http://photography.nationalgeographic.com/photography/photo-of-the-day/');

$pic;

foreach($html->find('.primary_photo a img') as $img){
	$pic = 'http:'.$img->src;
	break;
}

header('Location: '.$pic);