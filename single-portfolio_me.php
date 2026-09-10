<?php get_header(); ?>


<section class="portfolio-single-page section-sm">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-8 col-lg-7">
        <div class="portfolio-single-slider">



        <?php
for ($i = 1; $i <= 5; $i++) {

    $image = get_field('image_' . $i);

    if ($image) :
?>
        <div >
            <img
                src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>"
            >
        </div>
<?php
    endif;
}
?>


         
        </div>
      </div>
      <div class="col-xl-4 col-lg-5 mt-5 mt-lg-0">
        <div class="project-details">
          <h4>Project Details</h4>
          <ul>
            <li><span><i class="fa fa-shirtsinbulk "></i> Client</span><strong><?php echo esc_html(get_field('client_name'));?></strong></li>
            <li><span><i class="fa fa-shield "></i> What We Did</span><strong><?php echo esc_html(get_field('what_we_did'));?></strong></li>
            <li><span><i class="fa fa-ils "></i> Tools Used</span><strong><?php echo esc_html(get_field('tools_used'));?></strong></li>
            <li><span><i class="icon-calendar3"></i>Completed on:</span> <?php echo esc_html(get_field('completed_on:'));?></li>
            <li><span><i class="icon-lightbulb"></i>Skills:</span> <?php echo esc_html(get_field('skills'));?></li>
            <li><span><i class="icon-link"></i>Client:</span> <a href="index.html"><?php echo esc_html(get_field('client'));?></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="project-content mt-50">
         <?php the_content() ?>
         
           <div class="my-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?php echo esc_url(get_field('project_link')); ?>" allowfullscreen></iframe>
            </div>


          </div >
        </div>
      </div>
    </div>

  </div>
</section>





<section class="related-projects section-sm bg-gray">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2>Related Other Projects</h2>
                </div>
            </div>
        </div>

        <?php
        $current_post_id = get_the_ID();

        $related_projects = new WP_Query(array(
            'post_type'      => 'portfolio_me',
            'posts_per_page' => 2,
            'post__not_in'   => array($current_post_id),
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ));
        ?>

        <?php if ($related_projects->have_posts()) : ?>

            <div class="row">

                <?php while ($related_projects->have_posts()) : $related_projects->the_post(); ?>

                    <div class="col-md-6 mt-5">

                        <div class="content">

                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', array(
                                        'class' => 'img-fluid'
                                    )); ?>
                                </a>
                            <?php endif; ?>

                            <div class="content mt-4">

                                <h4>
                                    <?php the_title(); ?>
                                </h4>

                                <p>
                                    <?php
                                    echo wp_trim_words(
                                        get_the_excerpt(),
                                        25,
                                        '...'
                                    );
                                    ?>
                                </p>

                                <a href="<?php the_permalink(); ?>" class="btn btn-small">
                                    View Case Study
                                </a>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </div>
</section>

<?php get_footer(); ?>