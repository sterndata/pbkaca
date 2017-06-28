<?php  

$custom_metabox_locations = $simple_mb_events_form = new WPAlchemy_MetaBox(array
(
	'id' => '_pbk_home_extras_meta',
	'title' => 'Home Extras',
	'types' => array('pbk_home_extras'), 
	'context' => 'normal', 
	'priority' => 'high', 
	'autosave'	=> TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/meta-home.php'
));


$custom_metabox_locations = $simple_mb_eventspage_form = new WPAlchemy_MetaBox(array
(
	'id' => '_pbk_events_meta',
	'title' => 'Event Details',
	'types' => array('pbk_events'), 
	'context' => 'normal', 
	'priority' => 'high', 
	'autosave'	=> TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/meta-events.php'
));

$custom_metabox_locations = $simple_mb_wildcard_form = new WPAlchemy_MetaBox(array
(
	'id' => '_pbk_wc_meta',
	'title' => 'Wildcard Details',
	'types' => array('pbk_wildcard'), 
	'context' => 'normal', 
	'priority' => 'high', 
	'autosave'	=> TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/meta-wildcards.php'
));


$custom_metabox_locations = $simple_sb_wildcard_form = new WPAlchemy_MetaBox(array
(
	'id' => '_pbk_sb_meta',
	'title' => 'Sidebar Details',
	'types' => array('pbk_sidebar'), 
	'context' => 'normal', 
	'priority' => 'high', 
	'autosave'	=> TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/meta-sidebar.php'
));





$custom_metabox_locations = $simple_news_members_form = new WPAlchemy_MetaBox(array
(
	'id' => '_pbk_news_meta',
	'title' => 'Member Profile Details',
	'types' => array('pbk_news'), 
	'context' => 'normal', 
	'priority' => 'high', 
	'autosave'	=> TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/meta-news-profiles.php'
));





/* eof */