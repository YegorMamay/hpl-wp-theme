<?php
if (!class_exists('Portfolio')) {
  /**
   * Class Portfolio
   */
  class Portfolio {
    /**
     * @var string
     */
    public $name = 'portfolio';

    /**
     * Portfolio constructor.
     */
    public function __construct() {
      add_action('init', array($this, 'addPostType'));
    }

    public function addPostType() {
      $labels = array(
        'name' => __('Portfolio', 'brainworks'),
        'singular_name' => __('Project', 'brainworks'),
        'add_new' => __('Add new', 'brainworks'),
        'add_new_item' => __('Add project', 'brainworks'),
        'edit_item' => __('Edit project', 'brainworks'),
        'new_item' => __('New project', 'brainworks'),
        'view_item' => __('View projects', 'brainworks'),
        'search_items' => __('Search project', 'brainworks'),
        'not_found' => __('No project found', 'brainworks'),
        'not_found_in_trash' => __('No project found in trash', 'brainworks'),
        'insert_into_item' => __('Insert into project', 'brainworks'),
        'uploaded_to_this_item' => __('Uploaded to this post project', 'brainworks'),
        'featured_image' => __('Featured Image', 'brainworks'),
        'set_featured_image' => __('Set featured image', 'brainworks'),
        'remove_featured_image' => __('Remove featured image', 'brainworks'),
        'use_featured_image' => __('Use as featured image', 'brainworks'),
        'filter_items_list' => __('Filters list projects', 'brainworks'),
        'items_list_navigation' => __('Pagination to projects', 'brainworks'),
        'items_list' => __('List of projects', 'brainworks'),
      );

      register_post_type($this->name, array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 40,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'),
        'taxonomies' => array(),
        'has_archive' => 'portfolio',
        'delete_with_user' => false,
      ));

      flush_rewrite_rules();
    }
  }
}

global $portfolio;

$portfolio = new Portfolio();
