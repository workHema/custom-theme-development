<?php
/*
Template Name: services
*/
get_header();
?>



<section class="page-title bg-2" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1><?php the_title()?></h1>
          <p><?php the_excerpt()?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-about section">
	<div class="container">
		<div class="row align-items-center text-center text-lg-left">
			<div class="col-lg-6">
		<?php the_content() ?>
		</div>
			<div class="col-lg-6">
				<!-- <img class="img-fluid" src="<?php // echo get_template_directory()?>/assets/images/company/company-group-pic.jpg"> -->
				<!-- <img class="img-fluid" src="<?php // echo get_template_directory_uri(); ?>/assets/images/company/company-group-pic.jpg" alt="Company group"> -->


				   <?php
                $about_image = get_field('about_image');

                if ($about_image) :
                ?>

                    <img
                        class="img-fluid"
                        src="<?php echo esc_url($about_image['url']); ?>"
                        alt="<?php echo esc_attr($about_image['alt']); ?>"
                    >

                <?php endif; ?>
			</div>
		</div>
	</div>
</section>












<?php
get_template_part('template-parts/service/featured');
get_template_part('template-parts/service/list');
get_template_part('template-parts/home/cta');
get_footer()
  ?>