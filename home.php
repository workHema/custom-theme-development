<?php get_header(); ?>
<?php
$blog_page_id = get_option('page_for_posts');

$blog_thumbnail = get_the_post_thumbnail_url(
	$blog_page_id,
	'full'
);

if (!$blog_thumbnail) {
	$blog_thumbnail = get_template_directory_uri() . '/images/blog/blog-bg.jpg';
}

$blog_title = get_the_title($blog_page_id);
$blog_excerpt = get_the_excerpt($blog_page_id);
?>

<section
	class="page-title bg-2"
	style="background-image: url('<?php echo esc_url($blog_thumbnail); ?>');"
>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="block">

					<h1>
						<?php echo esc_html($blog_title); ?>
					</h1>

					<?php if ($blog_excerpt) : ?>

						<p>
							<?php echo esc_html($blog_excerpt); ?>
						</p>

					<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</section>


<div class="page-wrapper">
    <div class="container">

        <div class="row">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col-md-6">
                        <div class="post">

                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(
                                            'large',
                                            array('class' => 'img-fluid')
                                        ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <div class="post-meta">
                                <ul>

                                    <li>
                                        <i class="ion-calendar"></i>
                                        <?php echo get_the_date(); ?>
                                    </li>

                                    <li>
                                        <i class="ion-android-people"></i>
                                        POSTED BY <?php the_author(); ?>
                                    </li>

                                    <li>
                                        <i class="ion-pricetags"></i>

                                        <?php
                                        $categories = get_the_category();

                                        if ( ! empty( $categories ) ) {
                                            foreach ( $categories as $category ) {
                                                echo '<a href="' .
                                                    esc_url(
                                                        get_category_link(
                                                            $category->term_id
                                                        )
                                                    ) .
                                                    '">' .
                                                    esc_html($category->name) .
                                                    '</a> ';
                                            }
                                        }
                                        ?>

                                    </li>

                                </ul>
                            </div>

                            <div class="post-content">

                                <?php the_excerpt(); ?>

                                <a href="<?php the_permalink(); ?>"
                                   class="btn btn-main">
                                    Read More
                                </a>

                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>

            <?php else : ?>

                <div class="col-md-12">
                    <p>No posts found.</p>
                </div>

            <?php endif; ?>

        </div>

        <!-- Pagination -->
      <nav aria-label="Page navigation example">
    <ul class="pagination post-pagination justify-content-center">

        <?php
        $pagination = paginate_links(array(
            'type'      => 'array',
            'mid_size'  => 2,
            'prev_text' => 'Prev',
            'next_text' => 'Next',
        ));

        if ($pagination) :
            foreach ($pagination as $page) :
        ?>

            <li class="page-item <?php echo strpos($page, 'current') !== false ? 'active' : ''; ?>">
                <?php echo str_replace('page-numbers', 'page-link', $page); ?>
            </li>

        <?php
            endforeach;
        endif;
        ?>

    </ul>
</nav>


    </div>
</div>

<?php get_footer(); ?>
