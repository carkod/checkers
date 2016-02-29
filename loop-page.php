<div id="page">
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
<div id="page-title" class="row text-center">
	<div class="columns">
      <hr>
      <h3 id="res" data-magellan-target="exp"><?php the_title()?></h3>
      <hr>
    </div>
</div>

<div class="row">
    <div class="columns small-12">
        <?php the_content()?>

    </div>
    
</div>
  <?php endwhile; else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>

<!-- #software skills -->
</div>
