<?php

/**
 * Theme setup.
 */
function cdmdirect_setup()
{
  add_theme_support('title-tag');

  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'nswnma'),
      'footer' => __('Footer Menu', 'nswnma'),
    )
  );

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );

  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  add_theme_support('align-wide');
  add_theme_support('wp-block-styles');

  add_theme_support('editor-styles');
  add_editor_style('css/editor-style.css');
}
add_action('after_setup_theme', 'cdmdirect_setup');

/**
 * Custom Post Type.
 */
function cdmdirect_cpt()
{
  register_post_type('case_study', array(
    'name' => 'case_study',
    'label' => 'Case Studies',
    'active' => true,
    'description' => '',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
      'excerpt',
      'revisions',
    ),
    'taxonomies' => array(),
    'public' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'can_export' => true,
    'delete_with_user' => null,
    'labels' => array(),
    'menu_position' => '',
    'menu_icon' => 'dashicons-open-folder',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'post',
    'capabilities' => array(),
    'map_meta_cap' => null,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'acfe_archive_template' => '',
    'acfe_archive_ppp' => 10,
    'acfe_archive_orderby' => 'date',
    'acfe_archive_order' => 'DESC',
    'acfe_archive_meta_key' => '',
    'acfe_archive_meta_type' => '',
    'acfe_single_template' => '',
    'acfe_admin_archive' => false,
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'date',
    'acfe_admin_order' => 'DESC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
  ));

  register_post_type('resources', array(
    'name' => 'resources',
    'label' => 'Resources',
    'active' => true,
    'description' => '',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
      'excerpt',
      'revisions',
      '',
    ),
    'taxonomies' => array(),
    'public' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'can_export' => true,
    'delete_with_user' => null,
    'labels' => array(),
    'menu_position' => '',
    'menu_icon' => 'dashicons-media-document',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'post',
    'capabilities' => array(),
    'map_meta_cap' => null,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'acfe_archive_template' => '',
    'acfe_archive_ppp' => 10,
    'acfe_archive_orderby' => 'date',
    'acfe_archive_order' => 'DESC',
    'acfe_archive_meta_key' => '',
    'acfe_archive_meta_type' => '',
    'acfe_single_template' => '',
    'acfe_admin_archive' => false,
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'date',
    'acfe_admin_order' => 'DESC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
  ));

  register_post_type('team', array(
    'name' => 'team',
    'label' => 'Team',
    'active' => true,
    'description' => '',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
      'revisions',
    ),
    'taxonomies' => array(),
    'public' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'can_export' => true,
    'delete_with_user' => null,
    'labels' => array(),
    'menu_position' => '',
    'menu_icon' => 'dashicons-groups',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'post',
    'capabilities' => array(),
    'map_meta_cap' => null,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'acfe_archive_template' => '',
    'acfe_archive_ppp' => 10,
    'acfe_archive_orderby' => 'date',
    'acfe_archive_order' => 'DESC',
    'acfe_archive_meta_key' => '',
    'acfe_archive_meta_type' => '',
    'acfe_single_template' => '',
    'acfe_admin_archive' => false,
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'date',
    'acfe_admin_order' => 'DESC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
  ));

  register_post_type('testimonial', array(
    'name' => 'testimonial',
    'label' => 'Testimonials',
    'active' => true,
    'description' => '',
    'hierarchical' => true,
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
    ),
    'taxonomies' => array(),
    'public' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'can_export' => true,
    'delete_with_user' => null,
    'labels' => array(),
    'menu_position' => '',
    'menu_icon' => 'dashicons-format-chat',
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'has_archive' => false,
    'rewrite' => true,
    'capability_type' => 'post',
    'capabilities' => array(),
    'map_meta_cap' => null,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'acfe_archive_template' => '',
    'acfe_archive_ppp' => 10,
    'acfe_archive_orderby' => 'date',
    'acfe_archive_order' => 'DESC',
    'acfe_archive_meta_key' => '',
    'acfe_archive_meta_type' => '',
    'acfe_single_template' => '',
    'acfe_admin_archive' => false,
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'date',
    'acfe_admin_order' => 'DESC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
  ));
}
add_action('init', 'cdmdirect_cpt');

/**
 * Taxonomies.
 */
function cdmdirect_taxonomies()
{
  register_taxonomy('case_study_category', array(
    'case_study',
  ), array(
    'name' => 'case_study_category',
    'label' => 'Case Studies Category',
    'active' => true,
    'post_types' => array(
      'case_study',
    ),
    'description' => '',
    'hierarchical' => true,
    'public' => true,
    'publicly_queryable' => true,
    'update_count_callback' => '',
    'meta_box_cb' => null,
    'sort' => false,
    'labels' => array(),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'rewrite' => true,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'acfe_single_template' => '',
    'acfe_single_ppp' => 10,
    'acfe_single_orderby' => 'date',
    'acfe_single_order' => 'DESC',
    'acfe_single_meta_key' => '',
    'acfe_single_meta_type' => '',
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'name',
    'acfe_admin_order' => 'ASC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
    'capabilities' => array(),
  ));

  register_taxonomy('resources_category', array(
    'resources',
  ), array(
    'name' => 'resources_category',
    'label' => 'Resources Category',
    'active' => true,
    'post_types' => array(
      'resources',
    ),
    'description' => '',
    'hierarchical' => true,
    'public' => true,
    'publicly_queryable' => true,
    'update_count_callback' => '',
    'meta_box_cb' => null,
    'sort' => false,
    'labels' => array(),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'rewrite' => true,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'acfe_single_template' => '',
    'acfe_single_ppp' => 10,
    'acfe_single_orderby' => 'date',
    'acfe_single_order' => 'DESC',
    'acfe_single_meta_key' => '',
    'acfe_single_meta_type' => '',
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'name',
    'acfe_admin_order' => 'ASC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
    'capabilities' => array(),
  ));

  register_taxonomy('team_category', array(
    'team',
  ), array(
    'name' => 'team_category',
    'label' => 'Team Category',
    'active' => true,
    'post_types' => array(
      'team',
    ),
    'description' => '',
    'hierarchical' => true,
    'public' => true,
    'publicly_queryable' => true,
    'update_count_callback' => '',
    'meta_box_cb' => null,
    'sort' => false,
    'labels' => array(),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'rewrite' => true,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'acfe_single_template' => '',
    'acfe_single_ppp' => 10,
    'acfe_single_orderby' => 'date',
    'acfe_single_order' => 'DESC',
    'acfe_single_meta_key' => '',
    'acfe_single_meta_type' => '',
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'name',
    'acfe_admin_order' => 'ASC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
    'capabilities' => array(),
  ));

  register_taxonomy('testimonial_category', array(
    'testimonial',
  ), array(
    'name' => 'testimonial_category',
    'label' => 'Testimonial Category',
    'active' => true,
    'post_types' => array(
      'testimonial',
    ),
    'description' => '',
    'hierarchical' => true,
    'public' => true,
    'publicly_queryable' => true,
    'update_count_callback' => '',
    'meta_box_cb' => null,
    'sort' => false,
    'labels' => array(),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'rewrite' => true,
    'show_in_rest' => false,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'acfe_single_template' => '',
    'acfe_single_ppp' => 10,
    'acfe_single_orderby' => 'date',
    'acfe_single_order' => 'DESC',
    'acfe_single_meta_key' => '',
    'acfe_single_meta_type' => '',
    'acfe_admin_ppp' => 10,
    'acfe_admin_orderby' => 'name',
    'acfe_admin_order' => 'ASC',
    'acfe_admin_meta_key' => '',
    'acfe_admin_meta_type' => '',
    'capabilities' => array(),
  ));
}
add_action('init', 'cdmdirect_taxonomies');


function cdmdirect_siteoptions()
{
  acf_add_options_page(array(
    'menu_slug' => 'site_settings',
    'page_title' => 'Site Settings',
    'active' => true,
    'menu_title' => 'Site Settings',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => '',
    'icon_url' => '',
    'redirect' => true,
    'post_id' => 'options',
    'autoload' => false,
    'update_button' => 'Update',
    'updated_message' => 'Options Updated',
  ));
}
add_action('init', 'cdmdirect_siteoptions');
