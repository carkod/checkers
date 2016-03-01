<div id="resources">

<div id="resources-title" class="row text-center">
	<div class="columns">
      <hr>
      <h3 id="res" data-magellan-target="exp"><?php _e('Resources', 'checkers')?></h3>
      <hr>
    </div>
</div>
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); $resources = get_post_meta( $post->ID, 'thesis', true ); ?>
<div class="row">
	<div class="columns text-left">
		<h3><?php the_title();?></h3>
    </div>
</div>
<div class="row">
    <div class="columns small-12">
        <p><?php the_content()?></p>
        <h5><strong><?php _e('Files', 'checkers')?></strong></h5>
        <?php if( !empty( $resources ) ) : foreach( $resources as $res) : ?>
			<a data-tooltip title="<?php echo $res['description'] ?>" target="_blank" class="button success" href="http://<?php wp_get_attachment_url( $res['document'] );?>"><?php echo $res['name'];?>&nbsp;
            	
            </a>
        <?php endforeach; endif; ?>
        
    </div>
    
</div>
    <hr class="hr-spacing">
  <?php endwhile;   ?>

	<!-- end of the loop -->

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>

<!-- #software skills -->
</div>
