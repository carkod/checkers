<?php /* Template Name: cover */ ?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/pdf.css" />
<div id="resources">
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
<div class="row text-center">
	<div class="columns text-center">
    <br>
	<h1 class="columns medium-12"><?php bloginfo('name');?><small>&nbsp;&mdash;&nbsp;<?php the_title();?></small></h1>
    <br>
    <br>
    <br>
   	</div>
</div>

<div class="row">
    <div class="columns small-12">
        <?php the_content()?>
    </div>
    
</div>
  <?php endwhile; ?>

	<!-- end of the loop -->

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>

<!-- #software skills -->
</div>
