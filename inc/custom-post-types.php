<?php
function service_CPT(){
   $labels = [
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Service',
        'edit_item'          => 'Edit Service',
        'new_item'           => 'New Service',
        'view_item'          => 'View Service',
        'search_items'       => 'Search Services',
        'not_found'          => 'No services found',
        'menu_name'          => 'Services',
    ];

    $arg = [
        'labels'=> $labels,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports'=> ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' =>['slug'=>'service']
    ];
    register_post_type('service',  $arg);

}
add_action('init', 'service_CPT');


// portfolio custom post

function portfolio_custompost() {

    $labels = array(
        'name'          => 'Portfolios',
        'singular_name' => 'Portfolio',
        'add_new'       => 'Add New',
        'add_new_item'  => 'Add New Portfolio',
        'edit_item'     => 'Edit Portfolio',
        'new_item'      => 'New Portfolio',
        'view_item'     => 'View Portfolio',
        'search_items'  => 'Search Portfolios',
        'not_found'     => 'No portfolios found',
        'menu_name'     => 'Portfolios'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-portfolio',
        'supports'      => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ),
        'has_archive'   => true,
        'show_in_rest'  => true,
        'rewrite'       => array(
            'slug' => 'portfolio'
        )
    );

    register_post_type('portfolio_me', $args);
}

add_action('init', 'portfolio_custompost');


/*
 * Portfolio Categories
 */
function portfolio_taxonomyy() {

    $labels = array(
        'name'          => 'Portfolio Categories',
        'singular_name' => 'Portfolio Category',
        'search_items'  => 'Search Portfolio Categories',
        'all_items'     => 'All Portfolio Categories',
        'edit_item'     => 'Edit Portfolio Category',
        'add_new_item'  => 'Add New Portfolio Category',
        'menu_name'     => 'Portfolio Categories'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'show_ui'       => true,
        'show_in_rest'  => true,
        'hierarchical'  => true,
        'rewrite'       => array(
            'slug' => 'portfolio-category'
        )
    );

    register_taxonomy(
        'portfolio_category',
        array('portfolio_me'),
        $args
    );
}

add_action('init', 'portfolio_taxonomyy');


/*
 * Portfolio Tags
 */
function portfolio_tags() {

    $labels = array(
        'name'          => 'Portfolio Tags',
        'singular_name' => 'Portfolio Tag',
        'menu_name'     => 'Portfolio Tags',
        'all_items'     => 'All Portfolio Tags',
        'edit_item'     => 'Edit Portfolio Tag',
        'add_new_item'  => 'Add New Portfolio Tag',
        'new_item_name' => 'New Portfolio Tag Name'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'show_ui'       => true,
        'show_in_rest'  => true,
        'hierarchical'  => false,
        'rewrite'       => array(
            'slug' => 'portfolio-tag'
        )
    );

    register_taxonomy(
        'portfolio_tag',
        array('portfolio_me'),
        $args
    );
}

add_action('init', 'portfolio_tags');



// movie 

function movie_CPT(){
   $labels = [
        'name'               => 'movies',
        'singular_name'      => 'movie',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New movie',
        'edit_item'          => 'Edit movie',
        'new_item'           => 'New movie',
        'view_item'          => 'View movie',
        'search_items'       => 'Search movie',
        'not_found'          => 'No movie found',
        'menu_name'          => 'movie',
    ];

    $arg = [
        'labels'=> $labels,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-video',
        'supports'=> ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' =>['slug'=>'movie']
    ];
    register_post_type('movie',  $arg);

}
add_action('init', 'movie_CPT');



add_action( 'add_meta_boxes', 'movie_add_meta_box' );

function movie_add_meta_box() {

    add_meta_box(
        'movie_details',
        'Movie Details',
        'movie_details_callback',
        'movie',
        'normal',
        'high'
    );
}

function movie_details_callback( $post ) {

    wp_nonce_field(
        'movie_details_save', // action
        'movie_details_nonce' // field name
    );

    $author_name  = get_post_meta( $post->ID, '_movie_author_name', true );
    $trailer_url  = get_post_meta( $post->ID, '_movie_trailer_url', true );
    $release_date = get_post_meta( $post->ID, '_movie_release_date', true );
    ?>

    <p>
        <label for="movie_author_name">
            <strong>Author Name</strong>
        </label>
    </p>

    <input
        type="text"
        id="movie_author_name"
        name="movie_author_name"
        value="<?php echo esc_attr( $author_name ); ?>"
        class="widefat"
    >

    <p>
        <label for="movie_trailer_url">
            <strong>Trailer URL</strong>
        </label>
    </p>

    <input
        type="url"
        id="movie_trailer_url"
        name="movie_trailer_url"
        value="<?php echo esc_attr( $trailer_url ); ?>"
        class="widefat"
    >

    <p>
        <label for="movie_release_date">
            <strong>Release Date</strong>
        </label>
    </p>

    <input
        type="date"
        id="movie_release_date"
        name="movie_release_date"
        value="<?php echo esc_attr( $release_date ); ?>"
    >

    <?php
}


add_action( 'save_post_movie', 'movie_save_metaa' );

function movie_save_metaa( $post_id ) {

    // Check nonce.
    if (
        ! isset( $_POST['movie_details_nonce'] ) ||
        ! wp_verify_nonce(
            $_POST['movie_details_nonce'],
            'movie_details_save'
        )
    ) {
        return;
    }

    // Ignore autosaves.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check permission.
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Author name.
    if ( isset( $_POST['movie_author_name'] ) ) {

        update_post_meta(
            $post_id,
            '_movie_author_name',
            sanitize_text_field( $_POST['movie_author_name'] )
        );
    }

    // Trailer URL.
    if ( isset( $_POST['movie_trailer_url'] ) ) {

        update_post_meta(
            $post_id,
            '_movie_trailer_url',
            esc_url_raw( $_POST['movie_trailer_url'] )
        );
    }

    // Release date.
    if ( isset( $_POST['movie_release_date'] ) ) {

        update_post_meta(
            $post_id,
            '_movie_release_date',
            sanitize_text_field( $_POST['movie_release_date'] )
        );
    }
}







// check  what fault


// function portfolio_custompost(){
// $labels = [
// 'name' => "Portfolios",
// 'singular_name'=>'portfolio',
// 'add_new_item' => 'Add New portfolio',
// 'edit_item' => 'Edit Portfolio'
// ];


// $arg = [
//     'labels' => $labels,
//     'public' => true,
//     'menu_icon' => 'dashicons-portfolio',
//     'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
//     'has_archive' => false,
//     'rewrite' => array('slug'=> 'portfolio_made_by_hema')
// ];

// register_post_type('portfolio_me', $arg);

// }

// add_action('init', 'portfolio_custompost');


// function portfolio_taxonomyy(){

// $labels = [
//     'name' => 'Portfolio Categories',
//     'singular_name' => 'Portfolio Category'
// ];

// $arg = [
//     'labels' =>$labels,
//     'public'=>true,
//     'show_in_rest'=> true,
//     'hierarchical' => true,
//     'rewrite'=> ['slug'=> 'portfolio-category']
// ];

// register_taxonomy('cat',    ['portfolio_me'], $arg);

// }

// add_action('init', 'portfolio_taxonomyy');



// function portfolio_tags() {

//     $labels = [
//         'name'          => 'Portfolio Tags',
//         'singular_name' => 'Portfolio Tag',
//         'menu_name'     => 'Portfolio Tags',
//         'all_items'     => 'All Portfolio Tags',
//         'edit_item'     => 'Edit Portfolio Tag',
//         'add_new_item'  => 'Add New Portfolio Tag',
//         'new_item_name' => 'New Portfolio Tag Name',
//     ];

//     $args = [
//         'labels'       => $labels,
//         'public'       => true,
//         'show_ui'      => true,
//         'show_in_rest' => true,

//         // false = Tags
//         'hierarchical' => false,

//         'rewrite' => [
//             'slug' => 'portfolio-tag'
//         ],
//     ];

//     register_taxonomy(
//         'portfolio_tag',
//         ['portfolio_me'], // connect tags to portfolio CPT
//         $args
//     );
// }

// add_action('init', 'portfolio_tags');