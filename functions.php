<?php

  // thumbnail
  add_theme_support('post-thumbnails');
  add_image_size('tb', 120, 120, true);
  add_image_size('project', 300, 194, true);
  add_image_size('project360', 4096, 2048, true);
  add_filter( 'big_image_size_threshold', '__return_false' );

  
  add_filter('wpcf7_autop_or_not', '__return_false');

  add_action('admin_init', function () {
      // Redirect any user trying to access comments page
      global $pagenow;

      if ($pagenow === 'edit-comments.php') {
          wp_redirect(admin_url());
          exit;
      }

      // Remove comments metabox from dashboard
      remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

      // Disable support for comments and trackbacks in post types
      foreach (get_post_types() as $post_type) {
          if (post_type_supports($post_type, 'comments')) {
              remove_post_type_support($post_type, 'comments');
              remove_post_type_support($post_type, 'trackbacks');
          }
      }
  });

  // Close comments on the front-end
  add_filter('comments_open', '__return_false', 20, 2);
  add_filter('pings_open', '__return_false', 20, 2);

  // Hide existing comments
  add_filter('comments_array', '__return_empty_array', 10, 2);

  // Remove comments page in menu
  add_action('admin_menu', function () {
      remove_menu_page('edit-comments.php');
  });

  // Remove comments links from admin bar
  add_action('init', function () {
      if (is_admin_bar_showing()) {
          remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
      }
  });

  function status_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Status', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Status', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Status', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'status', array( 'post' ), $args );

}
add_action( 'init', 'status_custom_taxonomy', 0 );


?>