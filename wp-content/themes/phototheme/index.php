<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<main>
	<div class="container">
		<h1 class="page-title"><?php echo get_the_title(4); ?></h1>
	</div>

  <!-- <div class="container"> -->

    <!-- <div class="content"> -->
    		<?php get_template_part( 'loop', 'index' );	?>
    <!-- </div> --> <!-- End .content --> 

  <!-- </div> --> <!-- /.container -->
</main><!-- End main --> 

<?php get_footer(); ?>