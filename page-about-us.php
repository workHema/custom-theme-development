<?php get_header(); ?>


<section class="page-title bg-2"
    <?php if (has_post_thumbnail()) : ?>
        style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');"
    <?php endif; ?>
>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1><?php the_title() ?></h1>
          <p><?php the_excerpt()?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-img">
					<img class="img-fluid" src="<?php echo esc_html(get_template_directory_uri() .'/assets/images/company/about.jpg')?>">
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="pl-0 pl-lg-4">
					<?php the_content(); ?>
					<a href="contact.html" class="btn btn-small">Download Company Profile</a>
				</div>
			</div>
		</div>
		<div class="row counter-box text-center mt-50">
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-flask-outline"></i>
					<h4 class="count" data-count="349">0</h4>
					<span>Completed Projects</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-flame-outline"></i>
					<h4 class="count" data-count="35000">0</h4>
					<span>Lines Of Code</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-pint-outline"></i>
					<h4 class="count" data-count="70">0</h4>
					<span>Satisfied Customer</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-wineglass-outline"></i>
					<h4 class="count" data-count="10">0</h4>
					<span>Awards Winner</span>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-chatboxes-outline"></i>
					<h4 class="count" data-count="30">0</h4>
					<span>Satisfied Customer</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-body-outline"></i>
					<h4 class="count" data-count="15">0</h4>
					<span>Awards Winner</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-feature bg-dark section dark-service">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>We are indepented Design & Development Agency</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="service-item">
					<i class="ion-ios-color-filter-outline"></i>
					<h4>IOS App Development</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="service-item">
					<i class="ion-ios-unlocked-outline"></i>
					<h4>App Secutity</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="service-item">
					<i class="ion-ios-game-controller-b-outline"></i>
					<h4>Games Development</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="service-item">
					<i class="ion-ios-mic-outline"></i>
					<h4>Animation and Editing</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="service-item">
					<i class="ion-ios-lightbulb-outline"></i>
					<h4>UI/UX Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="service-item">
					<i class="icon ion-coffee"></i>
					<h4>Branding</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonial section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				
			<?php get_template_part('template-parts/home/testimonials'); ?>

			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="tabCommon">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">Vision</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Mission</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="approch-tab" data-toggle="tab" href="#approch" role="tab" aria-controls="approch" aria-selected="false">Approach</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
						<?php echo get_field('vision');?>
						</div>
						<div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
						<?php echo get_field('mission');?>
							</div>
						<div class="tab-pane fade" id="approch" role="tabpanel" aria-labelledby="approch-tab">
							<?php echo get_field('approch');?>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<?php

get_template_part('template-parts/home/cta');

get_footer();

?>
