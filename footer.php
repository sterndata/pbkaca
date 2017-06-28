<div id="footer-wrapper">


<div id="utility-nav">

<h4>Quicklinks</h4>

<?php wp_nav_menu( array('theme_location' => 'footer_one' )); ?>

<?php wp_nav_menu( array('theme_location' => 'footer_two' )); ?>


</div> <!--utility-nav -->



<div id="footer-content">

<h4>Connect With Us</h4>

<?php wp_reset_query(); ?>

<?php 

$args = array( 'post_type' => 'pbk_footer', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

the_content();

endwhile;

?>



<div id="contact-form">	
	
<?php 

$formemail = ((isset($_POST['formemail'])) ? $_POST['formemail'] : '');
$ipadd = $_SERVER['REMOTE_ADDR'];
$thisos = $_SERVER['HTTP_USER_AGENT'];


if ((isset($_POST['submit'])) && ($formemail != "") ):

$thisdate = gmDate("l - F j, Y");

$toWilliam = "william@swartwerk.com";
$toPBK = "info@pbkaca.org";

$subject = "Newsletter Subscription";
$message = "<p>= = = = = = = = = = = = = = = = = = = = = = = = = = = =</p>
ORIGINAL MESSAGE
<br />$thisdate
<p>= = = = = = = = = = = = = = = = = = = = = = = = = = = =</p>
<p>$formemail</p>

<p>= = = = = = = = = = = = = = = = = = = = = = = = = = = =</p>

<p><strong>IP Address</strong>: $ipadd</p>
<p><strong>User Agent</strong>: $thisos</p>";



mail($toWilliam, $subject, $message, "From: <no-reply@DOMAIN.com>\n" . "MIME-Version: 1.0\n" .
     "Content-type: text/html; charset=utf-8");

mail($toPBK, $subject, $message, "From: <no-reply@DOMAIN.com>\n" . "MIME-Version: 1.0\n" .
     "Content-type: text/html; charset=utf-8");


?>

<p id="thank-you">Thanks for signing up for the email list! You will now receive PBKACA event announcements and news. </p> 


<?php

else:



?>


<script language="JavaScript" type="text/javascript">
document.write ('<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">\n');
</script>


<div class="form"><?php echo(($formemail == "") && (isset($_POST['submit'])))?("<strong class='required'> Your Email Address:</strong>"):("Your Email Address:"); ?><br /><input type="text" name="formemail"  id="emailput" maxlength="50" value="<?php echo($formemail == "")?(""):("$formemail"); ?>"></div>

<script language="JavaScript" type="text/javascript">
document.write ('<input type="submit" id="submit-form" name="submit" value="Join Our Newsletter">\n');

</script></form>

<?php endif; ?>

<div id="copyright">

©<?php	
	echo gmDate("Y "); 
    $options = get_option('sample_theme_options');
    echo $options['copyright-statement'];
?>


<h3><a href="http://www.swartwerk.com/custom-wordpress-theme-development-chicago.php">Custom WordPress Themes Designs by Swartwerk Media Design, Inc. - Chicago</a></h3>


</div> <!-- copyright -->


	
</div> <!-- contact-form-->		

</div> <!-- footer-content -->



</div> <!-- footer -->

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10145589-1");
pageTracker._trackPageview();
} catch(err) {}</script>


<?php wp_footer(); ?>

</body>

</html>