<?php get_header('about');
?>

<div class="offer">
	<div class="oneoff">
		<img src="https://banner2.kisspng.com/20180326/yae/kisspng-web-development-responsive-web-design-promotion-5ab9046234ebc5.9985402215220747222168.jpg">
		<div class="offtext">
			<?php
$post_id = 1489;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
		</div>
	</div>
	<div class="oneoff">
		<img src="http://www.isreurope.com/uploads/images/meet-our-team-icon.png">
		<div class="offtext">
			<?php
$post_id = 1491;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
		</div>
	</div>
</div>
<div class="offer">
	<div class="oneoff">
		<img src="https://previews.123rf.com/images/asmati/asmati1610/asmati161000075/63402622-briefcase-sign-illustration-white-icon-on-red-circle-.jpg">
		<div class="offtext">
			<?php
$post_id = 1493;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
		</div>
	</div>
	<div class="oneoff">
		<img src="https://banner2.kisspng.com/20180326/yae/kisspng-web-development-responsive-web-design-promotion-5ab9046234ebc5.9985402215220747222168.jpg">
		<div class="offtext">
			<?php
$post_id = 1495;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
		</div>
	</div>
</div>

<div class="media">
	<div class="title">
		<?php
$post_id = 1443;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="members">
<div class="member" style="margin-left: 10px;">
	<img src="https://thoughtcatalog.files.wordpress.com/2014/07/screen-shot-2014-07-17-at-5-12-54-pm.png?w=786" style="height: 275px;">
		<?php
$post_id = 1445;
$queried_post = get_post($post_id);
?>
<h1><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h1>
<p><?php echo $queried_post->post_content; ?></p>
	<div class="job">
		<?php
$post_id = 1448;
$queried_post = get_post($post_id);
?>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="icons">
	<a href=""><i class="fab fa-facebook-f"></i></a>
	<a href=""><i class="fab fa-twitter"></i></a>
	<a href=""><i class="fab fa-google-plus-g"></i></a>
</div>
</div>
<div class="member">
	<img src="https://ld-wp.template-help.com/wordpress_63935/wp-content/uploads/2017/06/team-2-418x315.jpg">
		<?php
$post_id = 1512;
$queried_post = get_post($post_id);
?>
<h1><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h1>
<p><?php echo $queried_post->post_content; ?></p>
	<div class="job">
		<?php
$post_id = 1514;
$queried_post = get_post($post_id);
?>
<p style="padding-top: 15px;"><?php echo $queried_post->post_content; ?></p>
</div>
<div class="icons">
	<a href=""><i class="fab fa-facebook-f"></i></a>
	<a href=""><i class="fab fa-twitter"></i></a>
	<a href=""><i class="fab fa-google-plus-g"></i></a>
</div>
</div>
<div class="member" style="margin-right: 10px;">
	<img src="https://ld-wp.template-help.com/wordpress_63935/wp-content/uploads/2016/09/team-6-418x315.jpg">
		<?php
$post_id = 1517;
$queried_post = get_post($post_id);
?>
<h1><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h1>
<p><?php echo $queried_post->post_content; ?></p>
	<div class="ux">
		<?php
$post_id = 1519;
$queried_post = get_post($post_id);
?>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="icons" style="position: relative; bottom: 10px;">
	<a href=""><i class="fab fa-facebook-f"></i></a>
	<a href=""><i class="fab fa-twitter"></i></a>
	<a href=""><i class="fab fa-google-plus-g"></i></a>
</div>
</div>
</div>
</div>
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


<?php get_footer();
?>
