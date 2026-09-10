        <?php
        $testimonials = new WP_Query(
          array(
            'post_type'      => 'testimonial',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
          )
        );
        ?>

        <?php if ($testimonials->have_posts()) : ?>

          <div class="testimonial-carousel text-center">

            <div class="testimonial-slider owl-carousel">

              <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>

                <div>

                  <i class="ion-quote"></i>

                  <?php if (get_the_content()) : ?>
                    <p>
                      <?php the_content(); ?>
                    </p>
                  <?php endif; ?>

                  <div class="user">

                    <?php if (has_post_thumbnail()) : ?>

                      <?php
                      the_post_thumbnail(
                        'thumbnail',
                        array(
                          'alt' => esc_attr(get_the_title()),
                        )
                      );
                      ?>

                    <?php endif; ?>

                    <p>
                      <span><?php the_title(); ?></span>

                      <?php if (has_excerpt()) : ?>
                        <?php echo esc_html(get_the_excerpt()); ?>
                      <?php endif; ?>

                    </p>

                  </div>

                </div>

              <?php endwhile; ?>

            </div>

          </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
