<?php

get_header();

$author_name = get_post_meta(
    get_the_ID(),
    '_movie_author_name',
    true
);

$trailer_url = get_post_meta(
    get_the_ID(),
    '_movie_trailer_url',
    true
);

$release_date = get_post_meta(
    get_the_ID(),
    '_movie_release_date',
    true
);

?>

<h2>
    <?php echo esc_html( $author_name ); ?>
</h2>

<p>
    Release Date:
    <?php echo esc_html( $release_date ); ?>
</p>

<?php if ( $trailer_url ) : ?>

    <a href="<?php echo esc_url( $trailer_url ); ?>">
        Watch Trailer
    </a>

<?php endif; ?>

<?php get_footer(); ?>