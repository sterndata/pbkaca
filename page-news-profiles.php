<?php   get_header();

/* Template Name: Profile List */ ?>






<div id="primary-content-wrapper">

<div id="primary-content">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>
	
<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
<?php endwhile; ?>




<ul class="profiles-list news">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_news', 'orderby' => 'menu_order', 'order' => 'DESC', 'posts_per_page' => -1, 'taxonomy'=>'pbk_news-types', 'term' => 'Profile');

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_news_members_form ->get_the_id(), TRUE);





$wcCount++;


if ( $wcCount == 1 ) {

echo ("<li id=\"profile-count-$wcCount\" class=\"nobull\"><h2>");	

the_post_thumbnail('full', array('class' => 'profile-pic'));

the_title();

echo ("</h2>");	

the_content();

echo ("</li>");

}

else {

echo ("<li id=\"profile-count-$wcCount\" class=\"nobull\"><h2>");	

the_post_thumbnail('full', array('class' => 'profile-pic'));

the_title();

echo ("</h2><em>");	

echo $meta['member-profile-date'];

echo ("</em>");	

echo ("<a href='");	

the_permalink();

echo ("'\>Read Profile >></a></li>");

}




endwhile;

?>

</ul>








</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->












<?php get_footer(); ?>