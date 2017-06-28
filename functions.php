<?php  

require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support('post-thumbnails');

include_once 'metaboxes/setup.php';

include_once 'metaboxes/full-spec.php';


#############################################
####			Secondary Images		 ####
#############################################


if (class_exists('MultiPostThumbnails')) {
                new MultiPostThumbnails(
                    array(
                        'label' => 'Second Image',
                        'id' => 'secondary-image',
                        'post_type' => 'page'
                    )
                );
            }


 if (class_exists('MultiPostThumbnails')) {
                new MultiPostThumbnails(
                    array(
                        'label' => 'Third Image',
                        'id' => 'tertiary-image',
                        'post_type' => 'page'
                    )
                );
            }

#############################################
####               Menus      		     ####
#############################################

register_nav_menus(
	array( 
		'primary_nav' => 'Primary Navigation'
	)
);


register_nav_menus(
	array( 
		'footer_one' => 'Footer Column 1'
	)
);



register_nav_menus(
	array( 
		'footer_two' => 'Footer Column 2'
	)
);


register_nav_menus(
	array( 
		'footer_three' => 'Footer Column 3'
	)
);





#############################################
####          EVENT  TAXONOMY			####
#############################################


   register_taxonomy(
   	'pbk_event-types',
   	'pbk_events', array(
   		'show_ui'					=> true,
   		'query_var'					=> true,
   		'hierarchical'				=> true,
   		'rewrite'					=> array('slug' => 'PBK-Events'),		
   		'label'						=> 'Categories',
   	)
   );
   
   


#############################################
####          WILDCARD  TAXONOMY			####
#############################################


   register_taxonomy(
   	'pbk_wildcard-types',
   	'pbk_wildcard', array(
   		'show_ui'					=> true,
   		'query_var'					=> true,
   		'hierarchical'				=> true,
   		'rewrite'					=> array('slug' => 'PBK-wildcards'),		
   		'label'						=> 'Categories',
   	)
   );
   
   

#############################################
####          NEWS  TAXONOMY			####
#############################################


   register_taxonomy(
   	'pbk_news-types',
   	'pbk_news', array(
   		'show_ui'					=> true,
   		'query_var'					=> true,
   		'hierarchical'				=> true,
   		'rewrite'					=> array('slug' => 'PBK-news'),		
   		'label'						=> 'Categories',
   	)
   );
   



#############################################
####          MEMBER PROFILE  TAXONOMY			####
#############################################


   register_taxonomy(
   	'pbk_mempro-types',
   	'pbk_mempro', array(
   		'show_ui'					=> true,
   		'query_var'					=> true,
   		'hierarchical'				=> true,
   		'rewrite'					=> array('slug' => 'PBK-profiles'),		
   		'label'						=> 'Categories',
   	)
   );
   

#############################################
####	Load Custom Post Type - Events   ####
#############################################

if ( ! function_exists('pbk_events')):

function pbk_events () {

register_post_type( 'pbk_events',
array(
'labels' => array(
'name' => __( 'Events' ),
'singular_name' => __( 'Event' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View Events' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Events Found' ),
'not_found_in_trash' => __( 'No Events Found in Trash' ),
),
'description' => __('Event to be shown on Events page'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_events');

endif;



#############################################
####	Load Custom Post Type - Home Slides   ####
#############################################

if ( ! function_exists('pbk_home_slide')):

function pbk_home_slide () {

register_post_type( 'pbk_home_slide',
array(
'labels' => array(
'name' => __( 'Home Slide' ),
'singular_name' => __( 'Home Slide' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View Home Slide' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Home Slide Found' ),
'not_found_in_trash' => __( 'No Home Slide Found in Trash' ),
),
'description' => __('Home Slide to be shown on Home page'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_home_slide');

endif;



#############################################
####	Load Custom Post Type - Wildcards    ####
#############################################

if ( ! function_exists('pbk_wildcard')):

function pbk_wildcard () {

register_post_type( 'pbk_wildcard',
array(
'labels' => array(
'name' => __( 'Wild Card' ),
'singular_name' => __( 'Wild Card' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View Wild Card' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Wild Card Found' ),
'not_found_in_trash' => __( 'No Wild Card Found in Trash' ),
),
'description' => __('Wild Card to be shown on the home page'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_wildcard');

endif;



#############################################
####	Load Custom Post Type - Home Page Extras    ####
#############################################

if ( ! function_exists('pbk_home_extras')):

function pbk_home_extras () {

register_post_type( 'pbk_home_extras',
array(
'labels' => array(
'name' => __( 'Home Extras' ),
'singular_name' => __( 'Home Extras' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View Home Extras' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Home Extras Found' ),
'not_found_in_trash' => __( 'No Home Extras Found in Trash' ),
),
'description' => __('Home Extras to be shown on the home page'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_home_extras');

endif;


#############################################
####	Load Custom Post Type - NEWS    ####
#############################################

if ( ! function_exists('pbk_news')):

function pbk_news () {

register_post_type( 'pbk_news',
array(
'labels' => array(
'name' => __( 'News' ),
'singular_name' => __( 'News' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View News' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Connect Found' ),
'not_found_in_trash' => __( 'No Connect Found in Trash' ),
),
'description' => __('News to be shown in news'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_news');

endif;


#############################################
####	Load Custom Post Type - SIDEBAR    ####
#############################################

if ( ! function_exists('pbk_sidebar')):

function pbk_sidebar () {

register_post_type( 'pbk_sidebar',
array(
'labels' => array(
'name' => __( 'Sidebar' ),
'singular_name' => __( 'Sidebar' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View News' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Sidebar Found' ),
'not_found_in_trash' => __( 'No Sidebar Found in Trash' ),
),
'description' => __('Sidebar to be shown in secondary pages'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => true,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_sidebar');

endif;




#############################################
####	Load Custom Post Type - MEMBER PROFILES    ####
#############################################

if ( ! function_exists('pbk_mempro')):

function pbk_mempro () {

register_post_type( 'pbk_mempro',
array(
'labels' => array(
'name' => __( 'Member Profile' ),
'singular_name' => __( 'Member Profile' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View News' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Sidebar Found' ),
'not_found_in_trash' => __( 'No Member Profile Found in Trash' ),
),
'description' => __('Member Profile to be shown in Member Profile Page'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => true,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_mempro');

endif;



#############################################
####	Load Custom Post Type - FOOTER    ####
#############################################

if ( ! function_exists('pbk_footer')):

function pbk_footer () {

register_post_type( 'pbk_footer',
array(
'labels' => array(
'name' => __( 'Connect' ),
'singular_name' => __( 'Connect' ),
'add_new' => __( 'Add New' ),
'add_new_item' => __( 'Add New Items' ),
'edit' => __( 'Edit' ),
'edit_item' => __( 'Edit Item' ),
'new_item' => __( 'Add New Item' ),
'view' => __( 'View Home Extras' ),
'search_items' => __( 'Search Items' ),
'not_found' => __( 'No Connect Found' ),
'not_found_in_trash' => __( 'No Connect Found in Trash' ),
),
'description' => __('Home Connect to be shown in footer'),
'public' => true,
'show_ui' => true,
'publicly_queryable' => true,
'exclude_from_search' => true,
'heirarchical' => true,
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'page-attributes', 'revisions', 'thumbnail','custom-fields'),
'can_export' => true,
)
);

}

add_action( 'init', 'pbk_footer');

endif;

function sds_enqueue() {
        wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'mobile-menu', get_stylesheet_directory_uri() . '/_js/mobile-menu.js', array( 'jquery '), '20170628', false );
	wp_enqueue_script( 'home-slideshow', get_stylesheet_directory_uri() . '/_js/home-slideshow.js', array( 'jquery' ), '20170628', false );

}
add_action( 'wp_enqueue_scripts', 'sds_enqueue' );
