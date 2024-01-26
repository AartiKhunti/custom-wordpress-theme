<?php

// Enqueue styles
function custom_theme_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'custom_theme_styles');

// load js file //
function enqueue_custom_scripts() {
    wp_enqueue_script('media-uploader', get_template_directory_uri() . '/js/media-uploader.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Register ACF options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// Custom post type function //
function create_casino_hotel_post_type() {
    $labels = array(
        'name'               => 'Casino Hotels',
        'singular_name'      => 'Casino Hotel',
        'menu_name'          => 'Casino Hotels',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Casino Hotel',
        'edit_item'          => 'Edit Casino Hotel',
        'new_item'           => 'New Casino Hotel',
        'view_item'          => 'View Casino Hotel',
        'search_items'       => 'Search Casino Hotels',
        'not_found'          => 'No Casino Hotels found',
        'not_found_in_trash' => 'No Casino Hotels found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'casino-hotels'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'register_meta_box_cb' => 'add_casino_hotel_metaboxes', 
    );

    register_post_type('casino_hotel', $args);
}
add_action('init', 'create_casino_hotel_post_type');

function add_casino_hotel_metaboxes() {
    add_meta_box('casino_hotel_details', 'Casino Hotel Details', 'display_casino_hotel_metabox', 'casino_hotel', 'normal', 'high');
}

function display_casino_hotel_metabox() {
    global $post;

    // Logo
    $logo = get_post_meta($post->ID, '_casino_hotel_logo', true);
    echo '<label for="casino_hotel_logo">Logo:</label>';
    echo ' <input type="text" id="casino_hotel_logo" name="casino_hotel_logo" value="' . esc_attr($logo) . '" size="50" />';
    echo '<button class="upload-logo-button button">Upload/Select Logo</button>';
    echo '<br><br>';

    // Address
    $address = get_post_meta($post->ID, '_casino_hotel_address', true);
    echo '<label for="casino_hotel_address">Address:</label>';
    echo ' <textarea id="casino_hotel_address" name="casino_hotel_address" rows="4" cols="50">' . esc_textarea($address) . '</textarea>';
    echo '<br><br>';

    // Star Rating
    $star_rating = get_post_meta($post->ID, '_casino_hotel_star_rating', true);
    echo ' <label for="casino_hotel_star_rating">Star Rating:</label>';
    echo '<input type="text" id="casino_hotel_star_rating" name="casino_hotel_star_rating" value="' . esc_attr($star_rating) . '" size="10" />';
    echo '<br><br>';

    // Score
    $score = get_post_meta($post->ID, '_casino_hotel_score', true);
    echo '<label for="casino_hotel_score">Score (0-10):</label>';
    echo ' <input type="text" id="casino_hotel_score" name="casino_hotel_score" value="' . esc_attr($score) . '" size="10" />';
    echo '<br><br>';

    // External Link
    $external_link = get_post_meta($post->ID, '_casino_hotel_external_link', true);
    echo '<label for="casino_hotel_external_link">External Link:</label>';
    echo ' <input type="text" id="casino_hotel_external_link" name="casino_hotel_external_link" value="' . esc_attr($external_link) . '" size="50" />';
}

function save_casino_hotel_fields($post_id) {
    // Logo
    if (isset($_POST['casino_hotel_logo'])) {
        update_post_meta($post_id, '_casino_hotel_logo', sanitize_text_field($_POST['casino_hotel_logo']));
    }

    // Address
    if (isset($_POST['casino_hotel_address'])) {
        update_post_meta($post_id, '_casino_hotel_address', sanitize_textarea_field($_POST['casino_hotel_address']));
    }

    // Star Rating
    if (isset($_POST['casino_hotel_star_rating'])) {
        update_post_meta($post_id, '_casino_hotel_star_rating', sanitize_text_field($_POST['casino_hotel_star_rating']));
    }

    // Score
    if (isset($_POST['casino_hotel_score'])) {
        update_post_meta($post_id, '_casino_hotel_score', sanitize_text_field($_POST['casino_hotel_score']));
    }

    // External Link
    if (isset($_POST['casino_hotel_external_link'])) {
        update_post_meta($post_id, '_casino_hotel_external_link', esc_url($_POST['casino_hotel_external_link']));
    }
}
add_action('save_post', 'save_casino_hotel_fields');

function enqueue_media_uploader_scripts() {
    if (get_post_type() == 'casino_hotel') {
        wp_enqueue_media();
        wp_register_script('media-uploader', get_template_directory_uri() . '/js/media-uploader.js', array('jquery'), null, true);
        wp_enqueue_script('media-uploader');
    }
}
add_action('admin_enqueue_scripts', 'enqueue_media_uploader_scripts');

function register_my_menus()
{
   register_nav_menus(array( 'main-menu' => __( 'Footer menu' ) ) );
}
add_action( 'init', 'register_my_menus' );
?>