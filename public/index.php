<?php
$layout = file_get_contents('view/layout.php');
require('db/connect.php');

$url = $_SERVER['REQUEST_URI'];

$route = '^/$';
if(preg_match("#$route#", $url, $params)) {
	$page = include 'view/pages/home.php';
}

$route = '^/page/(?<catSlug>[a-zA-Z0-9_-]+)$';
if(preg_match("#$route#", $url, $params)){
	$page = include 'view/pages/heading.php';
}

$route = '^/page/(?<catSlug>[a-zA-Z0-9_-]+)/(?<adSlug>[a-zA-Z0-9_-]+)$';
if(preg_match("#$route#", $url, $params)){
	$page = include 'view/pages/show.php';
}

$layout = str_replace('{{ title in layout }}', $page['title'], $layout);
$layout = str_replace('{{ content in layout }}', $page['content'], $layout);

echo $layout;

?>