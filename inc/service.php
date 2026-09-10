<section class="service">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">

                <div class="section-title">
                    <h2>Our Services</h2>
                    <p>
                        We provide high-quality digital services
                        for businesses and organizations.
                    </p>
                </div>

            </div>
        </div>


        <div class="row">

            <?php
            $services = new WP_Query([
                'post_type'      => 'service',
                'posts_per_page' => 8,
                'post_status'    => 'publish',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);
            ?>


            <?php if ($services->have_posts()) : ?>

                <?php while ($services->have_posts()) : $services->the_post(); ?>

                    <?php
                    $icon        = get_field('service_icon');
                    $description = get_field('service_description');
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6">

                        <div class="service-item">

                            <?php if ($icon) : ?>
                                <i
                                    class="<?php echo esc_attr($icon); ?>"
                                    aria-hidden="true"
                                ></i>
                            <?php endif; ?>

                            <h4>
                                <?php the_title(); ?>
                            </h4>

                            <?php if ($description) : ?>
                                <p>
                                    <?php echo esc_html($description); ?>
                                </p>
                            <?php endif; ?>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>

    </div>
</section>