<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- read twice -->


   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  id="body">
<?php wp_body_open(); ?>

  <!-- Header Start -->
<header class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg p-0">
					<a class="navbar-brand" href="<?php echo esc_url(home_url('/'))?>">
						<?php if(has_custom_logo()){
							the_custom_logo();
						}
						else{
							?>
						<h2><?php bloginfo('name');?></h2>
							<?php
						}?>
					</a>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
						<span class="ion-android-menu"></span>
					</button>

					<div class="collapse navbar-collapse ml-auto" id="navbarsExample09">
						<ul class="navbar-nav ml-auto">
							<?php

wp_nav_menu(array(

'theme_location' => 'Main_menu',

'container' => false,

'menu_class' => 'navbar-nav ml-auto',

'walker' => new Bootstrap_Navwalker(),

));
?>
								</ul>
						
					</div>
				</nav>
			</div>
		</div>
	</div>
</header><!-- header close -->
