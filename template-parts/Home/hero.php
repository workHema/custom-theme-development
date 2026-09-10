
<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1 class="animated fadeInUp"><?php echo esc_html(get_field('hero_title'));?></h1>
					<p class="animated fadeInUp"><?php echo esc_html(get_field('hero_description'));?></p>
					<a href="<?php echo esc_url(get_field('hero_button_url'))?>" class="btn btn-main animated fadeInUp" ><?php echo esc_html(get_field('hero_button_text'));?></a>
				</div>
			</div>
		</div>
	</div>
</section>