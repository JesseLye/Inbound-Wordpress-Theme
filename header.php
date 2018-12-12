<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
		<?php wp_head(); ?>
	</head>

<body>

<!--<div class="status"></div>-->

  <section class="content">
    

  <!-- Responsive Navigation Menu (Hidden) --> 

    <span class="menu-trigger">MENU</span>

    <div class="hidden-nav">
      <div class="container">
          <?php
          
          $args = array(
            'theme_location' => 'primary'
          );
          
          ?>

          <?php wp_nav_menu($args); ?>

        </div>
      </div>

      <!-- Main Content Begins Here --> 

  <div class="title">
    <div class="container">
      <h1 id="titletext"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
    </div>

    <div class="nav">
      <div class="container" style="margin-top: 20px">
          <?php
          
          $args = array(
            'theme_location' => 'primary'
          );
          
          ?>

          <?php wp_nav_menu($args); ?>

        </div>
      </div>