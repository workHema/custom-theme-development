<?php get_header(); ?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="block">

                    <h1>Some of our latest projects.</h1>

                    <p>
                        Don’t just take our word for it.
                        Check out some of our latest work.
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>


<!-- Portfolio Start -->
<section class="portfolio-work">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="block">

                    <!-- Portfolio Filter -->
                    <div class="portfolio-menu">

                        <div class="btn-group btn-group-toggle justify-content-center">

                            <label class="btn btn-sm btn-primary active">
                                <input
                                    type="radio"
                                    name="portfolio-filter"
                                    value="all"
                                    checked
                                >
                                All
                            </label>

                            <?php

                            $portfolio_categories = get_terms(array(
                                'taxonomy'   => 'portfolio_category',
                                'hide_empty' => true
                            ));

                            if (!empty($portfolio_categories) && !is_wp_error($portfolio_categories)) :

                                foreach ($portfolio_categories as $category) :

                            ?>

                                    <label class="btn btn-sm btn-primary">

                                        <input
                                            type="radio"
                                            name="portfolio-filter"
                                            value="<?php echo esc_attr($category->slug); ?>"
                                        >

                                        <?php echo esc_html($category->name); ?>

                                    </label>

                            <?php

                                endforeach;

                            endif;

                            ?>

                        </div>

                    </div>


                    <!-- Portfolio Items -->
                    <div class="row portfolio-wrapper">

                        <?php

                        $portfolio_query = new WP_Query(array(
                            'post_type'      => 'portfolio_me',
                            'posts_per_page' => -1,
                            'post_status'    => 'publish'
                        ));

                        if ($portfolio_query->have_posts()) :

                            while ($portfolio_query->have_posts()) :

                                $portfolio_query->the_post();

                                /*
                                 * Get portfolio categories
                                 */
                                $categories = get_the_terms(
                                    get_the_ID(),
                                    'portfolio_category'
                                );

                                $category_slugs = array();

                                if ($categories && !is_wp_error($categories)) {

                                    foreach ($categories as $category) {

                                        $category_slugs[] = $category->slug;

                                    }

                                }

                                ?>

                                <div
                                    class="col-lg-4 col-sm-6 portfolio-item"
                                    data-categories="<?php echo esc_attr(implode(' ', $category_slugs)); ?>"
                                >

                                    <div class="portfolio-image">

                                        <?php if (has_post_thumbnail()) : ?>

                                            <?php the_post_thumbnail(
                                                'large',
                                                array(
                                                    'class' => 'img-fluid'
                                                )
                                            ); ?>

                                        <?php else : ?>

                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/images/portfolio/default.jpg"
                                                class="img-fluid"
                                                alt="<?php the_title_attribute(); ?>"
                                            >

                                        <?php endif; ?>

                                    </div>


                                    <div class="portfolio-hover">

                                        <div class="portfolio-content">

                                            <?php if (has_post_thumbnail()) : ?>

                                                <a
                                                    href="<?php echo esc_url(
                                                        get_the_post_thumbnail_url(
                                                            get_the_ID(),
                                                            'full'
                                                        )
                                                    ); ?>"
                                                    class="portfolio-popup"
                                                >

                                                    <i class="icon ion-search"></i>

                                                </a>

                                            <?php endif; ?>


                                            <a
                                                class="h3"
                                                href="<?php the_permalink(); ?>"
                                            >
                                                <?php the_title(); ?>
                                            </a>


                                            <?php if (has_excerpt()) : ?>

                                                <p>
                                                    <?php echo esc_html(
                                                        get_the_excerpt()
                                                    ); ?>
                                                </p>

                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </div>

                            <?php

                            endwhile;

                            wp_reset_postdata();

                        else :

                            ?>

                            <div class="col-md-12">

                                <p>
                                    No portfolio projects found.
                                </p>

                            </div>

                            <?php

                        endif;

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Portfolio End -->


<?php get_footer(); ?>