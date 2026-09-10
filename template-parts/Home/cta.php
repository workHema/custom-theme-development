<?php $homeId = get_option('page_on_front'); ?>

<section class="call-to-action bg-1 section-sm overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2 class="mb-3"><?php echo esc_html(get_field('cta_heading', $homeId));?></h2>
					<p><?php echo get_field('cta_description',  $homeId);?></p>
					<a class="btn btn-main btn-solid-border" href="<?php echo esc_url(home_url(get_field('Cta_btn_link',  $homeId)));?>"><?php echo esc_html(get_field('cta_btn_text',  $homeId));?></a>
				
				</div>
			</div>
		</div>
	</div>
</section>
