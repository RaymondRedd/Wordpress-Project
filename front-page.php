<?php 

get_header();
?>
			  
			
			<!-- Indicators -->
		<div id="tripple-carousel" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

<?php 
			
				$args_cat = array(
					'include' => '81, 18, 82'
				);
				
				$categories = get_categories($args_cat);
				$count = 0;
				$bullets = '';
				foreach($categories as $category):
					
					$args = array( 
						'type' => 'post',
						'posts_per_page' => 1,
						'category__in' => $category->term_id,
						'category__not_in' => array( 10 ),
					);
					
					$lastBlog = new WP_Query( $args ); 
					
					if( $lastBlog->have_posts() ):
						
						while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

							 <div class="item <?php if($count == 0): echo 'active'; endif; ?>">
      <?php the_post_thumbnail('full'); ?>
      <div class="carousel-caption">
      	   <?php the_title( sprintf('<h1 class="entry-titlee"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	
								  <small><?php the_category(' '); ?></small>
      </div>
    </div>
							
						
						      
						    
							  
						    
						    <?php $bullets .= '<li data-target="#tripple-carousel" data-slide-to="'.$count.'" class="'; ?>
						    <?php if($count == 0): $bullets .='active'; endif; ?>
						    
						    <?php  $bullets .= '"></li>'; ?>
						
						<?php endwhile;
						
					endif;
					
					wp_reset_postdata();
				
				$count++;
					
				endforeach;
			

			?>
    
  </div>

     <!-- Indicators --> 
  <ol class="carousel-indicators">
    
    <?php echo $bullets; ?>
  </ol>

  <!-- Controls -->
  <a class="left carousel-control" href="#tripple-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#tripple-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

<div class="content">
<div class="about">
	<?php
$post_id = 1407;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>

</div>

<div class="video">
<?php 
$video_file = get_template_directory_uri() . "/vid/video.mp4";
echo do_shortcode('[video mp4=' . $video_file . ' width = 1320 height = 740]');
?>
</div>
</div>

<div class="we">

<div class="us">
	<img src="https://cdn.onlinewebfonts.com/svg/img_453235.png">
	<?php
$post_id = 1409;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="pros">
	<img src="http://freeflaticons.com/wp-content/uploads/2014/11/group-copy-1416476921gn4k8.png">
	<?php
$post_id = 1412;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="challenges">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuw-HFPxt9qJcvaKFh6f1_SQQTlc2Bcjo1eMPEI3wR5kR2ePZm">
	<?php
$post_id = 1414;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="hugeworks">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzluqhueZnw578y5ga5xFeSy_oqOy38hdIMAPK81OEaukmKFYV">
	<?php
$post_id = 1416;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
</div>

</div>

<div class="skillsback">
<div class="skills">
	<?php
$post_id = 1418;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
</div>

<div class="links">
<div class="superbowl">
	<?php 
	$post_id = 1420;
$queried_post = get_post($post_id);
?>
<p><?php echo get_the_date( 'Y-m-d' ); ?></p>
<h1><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h1>
</div>
<div class="boomers">
	<?php 
	$post_id = 1422;
$queried_post = get_post($post_id);
?>
<p><?php echo get_the_date( 'Y-m-d' ); ?></p>
<h1><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h1>
</div>
<div class="phygital">
	<?php 
	$post_id = 1424;
$queried_post = get_post($post_id);
?>
<p><?php echo get_the_date( 'Y-m-d' ); ?></p>
<h1><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h1>
</div>
</div>
</div>
<div class="services">
<div class="title">
		<?php
$post_id = 1428;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="articlebox">
<div class="article">
<img src="https://image.freepik.com/iconen-gratis/luidspreker-met-handvat_318-40233.jpg">
<div class="articletext">
	<?php
$post_id = 1431;
$queried_post = get_post($post_id);
?>
<h2><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h2>
<p><?php echo $queried_post->post_content; ?></p>
</div>
</div>
<div class="article">
<img src="https://i.pinimg.com/originals/38/70/b6/3870b6e6cdf662dace654ca36ec6c48b.jpg">
<div class="articletext">
	<?php
$post_id = 1433;
$queried_post = get_post($post_id);
?>
<h2><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h2>
<p><?php echo $queried_post->post_content; ?></p>
</div>
</div>
<div class="article">
<img src="https://static.thenounproject.com/png/251491-200.png">
<div class="articletext">
	<?php
$post_id = 1435;
$queried_post = get_post($post_id);
?>
<h2><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h2>
<p><?php echo $queried_post->post_content; ?></p>
</div>
</div>
</div>
<div class="articlebox">
<div class="article">
<img src="https://image.freepik.com/iconen-gratis/borstel-kunstenaar_318-33254.jpg">
<div class="articletext">
	<?php
$post_id = 1437;
$queried_post = get_post($post_id);
?>
<h2><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h2>
<p><?php echo $queried_post->post_content; ?></p>
</div>
</div>
<div class="article">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqpXALp7Qzc7TMlXMYJmrsMrKEsR_FgkAHiZEWCWM3P-XrdCAb">
<div class="articletext">
	<?php
$post_id = 1439;
$queried_post = get_post($post_id);
?>
<h2><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h2>
<p><?php echo $queried_post->post_content; ?></p>
</div>
</div>
<div class="article">
<img src="https://cdn0.iconfinder.com/data/icons/logistics-delivery-line-1/24/35-512.png">
<div class="articletext">
	<?php
$post_id = 1441;
$queried_post = get_post($post_id);
?>
<h2><a href="<?php the_permalink(); ?>"><?php echo $queried_post->post_title; ?></a></h2>
<p><?php echo $queried_post->post_content; ?></p>
</div>
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
	<div class="job back-end">
		<?php
$post_id = 1448;
$queried_post = get_post($post_id);
?>
<p><?php echo $queried_post->post_content; ?></p>
</div>
<div class="icons first">
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
	<div class="job project">
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
<div class="icons last" style="position: relative; bottom: 10px;">
	<a href=""><i class="fab fa-facebook-f"></i></a>
	<a href=""><i class="fab fa-twitter"></i></a>
	<a href=""><i class="fab fa-google-plus-g"></i></a>
</div>
</div>
</div>
</div>
<div class="signup">
	<div class="title">
		<?php
$post_id = 1453;
$queried_post = get_post($post_id);
?>
<h1><?php echo $queried_post->post_title; ?></h1>
<p><?php echo $queried_post->post_content; ?></p>
	</div>
	<div class="newsletter">
		<input type="text" name="email" class="email" placeholder=" Your email here" value="<?php echo esc_attr($_POST['message_email']); ?>">
		<input type="submit" class="submit">
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
<div class="site-content clearfix">

<div class="main-column">
	
<?php 
		
	endwhile;

else: 
	echo '<p>No content found</p>';

endif; ?>

</div>

</div>

<?php get_footer();

?>