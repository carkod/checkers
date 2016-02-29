<div id="projects">

<div id="projects-title" class="row text-center">
	<div class="columns">
      <hr>
      <h3 id="exp" data-magellan-target="exp"><?php _e('Web development projects', 'checkers')?></h3>
      <hr>
    </div>
</div>
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); $projects = get_post_meta( $post->ID, 'website', true ); if( !empty( $projects ) ) : foreach( $projects as $proj) : ?>
<div class="row">
	<div class="columns small-12 large-5">
    	<h3><?php the_title();?></h3>
        <?php $term = get_the_terms($post->ID, 'job'); if (!empty($term)): foreach ($term as $t) : ?>
        	<p><em><a href="<?php echo get_term_link($t); ?>" title="<?php echo $t->description ?>" data-tooltip><?php echo $t->name;?></a>&nbsp;&middot;&nbsp;<?php echo $proj['tagline'];?></em></p>
        <?php endforeach; endif;?>
        <img class="thumbnail" src="<?php echo wp_get_attachment_url( $proj['image'] );?>" alt="" />
        
  	</div>
    <div class="columns small-12 large-7">
	    
        <h5><strong><?php _e('Description', 'checkers')?></strong></h5>
        <p><?php echo $proj['description'];?></p>
        <h5><strong><?php _e('Technology', 'checkers')?></strong></h5>
        <p><?php echo $proj['tools'];?></p>
        <?php if( !empty($proj['demo'])):?>
        	<a target="_blank" class="button warning" href="http://<?php echo $proj['demo'];?>"><?php _e('Demo site', 'checkers')?></a>
        <?php endif;?>
        <?php if( !empty($proj['live'])):?>
	        <a target="_blank" class="button success" href="http://<?php echo $proj['live'];?>"><?php _e('Live site', 'checkers')?></a>
        <?php endif;?>
    </div>
    
</div>
    <hr class="hr-spacing">
  <?php endforeach; endif; endwhile;   ?>

	<!-- end of the loop -->

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>

<!-- #software skills -->
</div>
