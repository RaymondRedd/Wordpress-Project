
<footer class="site-footer">

<p><?php bloginfo('name'); ?> -&copy; <?php echo date('Y');?> All Rights Reserved.</p>

<div class="footericons footerhome">
	<a href=""><i class="fab fa-facebook-f"></i></a>
	<a href=""><i class="fab fa-twitter"></i></a>
	<a href=""><i class="fab fa-google-plus-g"></i></a>
	<a href=""><i class="fab fa-instagram"></i></a>
</div>

<script type="text/javascript">
	$( document ).ready(function() {
  	$('.left').click(function() {
  		$count = $count - 1;
  	});
  	$('.right').click(function() {
  		$count = $count + 1;
  	});
});
</script>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>