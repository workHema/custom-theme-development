<?php
get_header();

get_template_part('template-parts/home/hero');
get_template_part('template-parts/home/about');
get_template_part('template-parts/home/feature');


get_template_part('template-parts/home/services');
get_template_part('template-parts/home/cta');

?>


<section class="testimonial">
  <div class="container">

    <!-- Section Title -->
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2>Fun Facts About Us</h2>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, <br>
            there live the blind texts. Separated they live in Bookmarksgrove
            right at the coast of the Semantics
          </p>
        </div>
      </div>
    </div>

    <!-- Counters + Testimonials -->
    <div class="row align-items-center">

      <!-- Counters -->
      <div class="col-md-6">
        <div class="block">

          <ul class="counter-box clearfix">

            <li>
              <div class="counter-item">
                <i class="<?php echo esc_html(get_field('counter_1_icon'));?>"></i>
                <h4 class="count" data-count="<?php echo esc_html(get_field('counter_1_number'));?>">0</h4>
                <span><?php echo esc_html(get_field('counter_1_label'));?></span>
              </div>
            </li>

            <li>
               <div class="counter-item">
                <i class="<?php echo esc_html(get_field('counter_2_icon'));?>"></i>
                <h4 class="count" data-count="<?php echo esc_html(get_field('counter_2_number'));?>">0</h4>
                <span><?php echo esc_html(get_field('counter_2_label'));?></span>
              </div>
            </li>

            <li>
              <div class="counter-item">
                <i class="<?php echo esc_html(get_field('counter_3_icon'));?>"></i>
                <h4 class="count" data-count="<?php echo esc_html(get_field('counter_3_number'));?>">0</h4>
                <span><?php echo esc_html(get_field('counter_3_label'));?></span>
              </div>
            </li>

            <li>
              <div class="counter-item">
                <i class="<?php echo esc_html(get_field('counter_4_icon'));?>"></i>
                <h4 class="count" data-count="<?php echo esc_html(get_field('counter_4_number'));?>">0</h4>
                <span><?php echo esc_html(get_field('counter_4_label'));?></span>
              </div>
            </li>

          </ul>

        </div>
      </div>

      <!-- Testimonials -->
      <div class="col-md-5 col-md-offset-1">

<?php get_template_part('template-parts/home/testimonials'); ?>

      </div>

    </div>

  </div>
</section>











<?php
get_footer();




?>






