<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<div class="main">
	<div class="container">
		<h1><?php echo get_the_title(4); ?></h1>
	</div>

  <!-- <div class="container"> -->

    <!-- <div class="content"> -->
    		<?php get_template_part( 'loop', 'index' );	?>
    <!-- </div> --> <!-- End .content --> 

  <!-- </div> --> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>