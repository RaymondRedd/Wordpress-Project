<?php 

get_header('contact');

?>
<div class="contact">
	<div class="adress">
		<span><i class="fas fa-map-marker-alt fa-5x"></i></span>
			<?php
$post_id = 1457;
$queried_post = get_post($post_id);
?>
<h3><?php echo $queried_post->post_title; ?></h3>
<p><?php echo $queried_post->post_content; ?></p>
	</div>
	<div class="phones">
		<span><i class="fas fa-mobile-alt fa-5x"></i></span>
			<?php
$post_id = 1459;
$queried_post = get_post($post_id);
?>
<h3><?php echo $queried_post->post_title; ?></h3>
<p><?php echo $queried_post->post_content; ?></p>
	</div>
	<div class="contacts">
		<span><i class="fas fa-envelope fa-5x"></i></span>
			<?php
$post_id = 1461;
$queried_post = get_post($post_id);
?>
<h3><?php echo $queried_post->post_title; ?></h3>
<p><?php echo $queried_post->post_content; ?></p>
	</div>
	<div class="hours">
		<span><i class="far fa-clock fa-5x"></i></span>
			<?php
$post_id = 1463;
$queried_post = get_post($post_id);
?>
<h3><?php echo $queried_post->post_title; ?></h3>
<p><?php echo $queried_post->post_content; ?></p>
	</div>
</div>
<div class="touch">
		<?php
$post_id = 1486;
$queried_post = get_post($post_id);
?>
<h3><?php echo $queried_post->post_title; ?></h3>
</div>
<div class="">
	
</div>


<?php get_footer(); 

?>