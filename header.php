<!Doctype html>
<html>
<head>
	<title><?php bloginfo('title'); ?></title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="container">
		<header>
			<h1><?php bloginfo('name'); ?><br />
				<span><?php bloginfo('description'); ?></span></h1>
			<div id="search"><?php dynamic_sidebar('header-right'); ?></div>
		</header>
		<div style="clear:both;"></div>
		<nav class="main"><?php wp_nav_menu(); ?></nav>


