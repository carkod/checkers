<?php /* Template Name: pdf */ ?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/pdf.css" />
<div class="row text-center">
	<div class="columns text-center">
    <br>
	<h1 class="columns medium-12"><?php bloginfo('name');?><small>&nbsp;&mdash;&nbsp;<?php bloginfo('description');?></small></h1>
    <br>
    <br>
    <br>
   	</div>
</div>
<div id="cv">
<div id="summary" class="row">
      <div class="columns">
		<h3 class="media-heading"><?php _e('Summary and professional goals', 'checkers')?></h3>
      </div>
<?php $summary_query = new WP_Query( array('post_type' => 'cv', 'meta_key' => 'summary' ));   if ( $summary_query->have_posts() ) :  while ( $summary_query->have_posts() ) : $summary_query->the_post(); $summary = get_post_meta( $post->ID, 'summary', true ); if( !empty( $summary ) ) : foreach( $summary as $sum) : ?>      
   	  <div class="columns">
          <p><?php echo $sum['text1'];?></p>
      </div>
      <?php endforeach; endif; endwhile;   ?>

	<!-- end of the loop -->

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>      
</div>
<!-- # End Summary -->


<!-- #Personal details -->       
<div id="personal">
    <div id="personal-title" class="row text-center">
        <div id="personal-title" class="columns">
            <hr>
          <h3 id="details" data-magellan-target="details"><?php _e('Personal details', 'checkers')?></h3>
          <hr>
        </div>
    </div>
    
 <?php $personal_query = new WP_Query( array('post_type' => 'cv', 'meta_key' => 'personal' ));   if ( $personal_query->have_posts() ) :  while ( $personal_query->have_posts() ) : $personal_query->the_post(); $personal = get_post_meta( $post->ID, 'personal', true ); if( !empty( $personal ) ) : foreach( $personal as $pers) : ?>    
    
    <div id="personal-photo" class="row"> 
       <div class="columns small-12 medium-12 large-10">
                <div id="cv-details1" class="row">
                       <p class="columns large-6"><?php if (!empty($pers['first-name'])){?><strong><?php _e('First name', 'checkers')?>&#58;&nbsp;</strong><?php echo $pers['first-name']; }?></p>
                       <p class="columns large-6"><?php if (!empty($pers['last-name'])){?><strong><?php _e('Last names', 'checkers')?>&#58&nbsp;</strong><?php echo $pers['last-name']; }?></p>
                </div>
                <div id="cv-details2" class="row">
                       <p class="columns large-6"><?php if (!empty($pers['date-of-birth'])){?><strong><?php _e('Date of birth', 'checkers')?>&#58;&nbsp;</strong><?php echo $pers['date-of-birth'] ;}?></p>
                       <p class="columns large-6"><?php if (!empty($pers['place-of-birth'])){?><strong><?php _e('Place of birth', 'checkers')?>&#58;&nbsp;</strong><?php echo $pers['place-of-birth']; }?></p>
                </div>
                <div id="cv-details3" class="row">
                       <p class="columns large-6"><?php if (!empty($pers['nationality'])){?><strong><?php _e('Nationality', 'checkers')?>&#58;&nbsp;</strong><?php echo $pers['nationality'];}?></p>
                       <p class="columns large-6"><?php if (!empty($pers['id-no'])){?><strong><?php _e('ID No.')?>&#58;&nbsp;</strong><?php echo $pers['id-no']; }?></p>
                </div>
                <div id="cv-details4" class="row">
                       <p class="columns small-12"><?php if (!empty($pers['address'])){?><strong><?php _e('Address', 'checkers')?>&#58;&nbsp;</strong><?php echo $pers['address']; }?></p>
                </div>
                <div id="cv-details5" class="row">
                       <p class="columns large-6"><?php if (!empty($pers['phone-no'])){?><strong><?php _e('Phone No.', 'checkers')?>&#58;&nbsp;</strong><?php echo $pers['phone-no']; }?></p>
                        <p class="columns large-6"><?php if (!empty($pers['e-mail'])){?><strong><?php _e('E-mail', 'checkers')?>&#58;&nbsp;</strong><?php echo $pers['e-mail']; }?></p>
                </div>
                 
           </div>
       <div id="cv-photo" class="columns small-4 small-centered large-2 end">
          <img class="" src="<?php echo wp_get_attachment_url( $pers['photo'] ); ?>">
       </div>
    </div>
      <?php endforeach; endif; endwhile;   ?>

	<!-- end of the loop -->

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>    
</div>
<!-- #End Personal details -->

   
<!-- #Work -->

<div id="work">
<div id="work-title" class="row text-center">
  <div class="columns">
      <hr>
      <h3 id="exp" data-magellan-target="exp"><?php _e('Work Experience', 'checkers')?></h3>
      <hr>
  </div>
</div>
<?php $tenure_query = new WP_Query( array('post_type' => 'cv', 'meta_key' => 'tenure' ));   if ( $tenure_query->have_posts() ) :  while ( $tenure_query->have_posts() ) : $tenure_query->the_post(); $tenure = get_post_meta( $post->ID, 'tenure', true ); if( !empty( $tenure ) ) : foreach( $tenure as $ten) : ?>
<div class="row">
	<div class="columns medium-4">
    	<p><?php echo $ten['company-name'];?></h5>
  	</div>
    <div class="columns medium-8">
	    
        <h4><strong><?php echo $ten['position'];?></strong></h4>
    </div>
</div>
    
  <div class="row">
      <div class="columns medium-4">
        <p><?php echo $ten['date'];?></p>
      </div>
      <div class="columns medium-8">
        <p><?php echo $ten['description'];?></p>
      </div>
  </div>


  <?php endforeach; endif; endwhile;   ?>

	<!-- end of the loop -->

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>
 <!-- End experience -->
</div>

<!-- #Education -->

<div id="education">
   <div id="education-title" class="row text-center">
        <div class="columns">
            <hr>
            <h3 id="edu" data-magellan-target="edu"><?php _e('Education', 'checkers')?></h3>
            <hr>
        </div>
	</div>
    <?php $edu_query = new WP_Query( array('post_type' => 'cv', 'meta_key' => 'educ' ));   if ( $edu_query->have_posts() ) :  while ( $edu_query->have_posts() ) : $edu_query->the_post(); $edu = get_post_meta( $post->ID, 'educ', true ); if( !empty( $edu ) ) : foreach( $edu as $e) : ?>
    
    <div class="row">
        <div class="columns medium-4">
        <p><?php echo $e['school'];?></h5>
        </div>
        <div class="columns medium-8">
        <h4><strong><?php echo $e['degree'];?></strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-4">
        <p><?php echo $e['date'];?></p>
        </div>
        <div class="columns medium-8">
        <p><?php echo $e['description'];?></p>
        </div>
    </div>
    
      <?php endforeach; endif; endwhile;   ?>

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>
<!-- End education -->    
</div>

<div id="languages">
	<div class="row text-center">
        <div>
            <hr>
            <h3><?php _e('Language skills', 'checkers')?></h3>
            <hr>
        </div>
	</div>
<?php $lang_query = new WP_Query( array('post_type' => 'cv', 'meta_key' => 'lang' ));   if ( $lang_query->have_posts() ) :  while ( $lang_query->have_posts() ) : $lang_query->the_post(); $lang = get_post_meta( $post->ID, 'lang', true ); if( !empty( $lang ) ) : foreach( $lang as $l) : ?>    
  <div class="row">
      <div class="columns small-12 medium-6 large-6">
        <p><?php echo $l['languages'];?>&nbsp;<small><?php echo $l['description'];?></small></p>
      </div>
        
      <div class="columns small-12 medium-6 large-6">
         <div class="<?php if( $l['level'] > 40 ) : echo 'success' ; else : echo 'warning'; endif; ?> progress">
           <div class="progress-meter progress-bar-success" style="width: <?php echo $l['level'];?>%">
           <p class="progress-meter-text text-right"><?php if( !empty( $l['bar-text'] ) ) : echo $l['bar-text']; endif;?></p>
           </div>
        </div>
     </div>
  </div>  
  <?php endforeach; endif; endwhile;   ?>
<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>
</div>

<!-- #Webdev skills -->
<div id="webdev" class="columns medium-6">
    <div class="row text-center">
      <div id="webdev-title" class="row">
          <hr>
            <h3 id="skills" data-magellan-target="skills"><?php _e('Web development skills', 'checkers')?></h3>
          <hr>
      </div>
    </div>
<?php $webdev_query = new WP_Query( array('post_type' => 'cv', 'meta_key' => 'skills' ));   if ( $webdev_query->have_posts() ) :  while ( $webdev_query->have_posts() ) : $webdev_query->the_post(); $webdev = get_post_meta( $post->ID, 'skills', true ); if( !empty( $webdev ) ) : foreach( $webdev as $webd) : ?>    
  <div class="row">
      <div class="row columns small-12">
        <p><?php echo $webd['skill'];?>&nbsp;<small><?php echo $webd['description'];?></small></p>
      </div>
      
  </div>
    
       <?php endforeach; endif; endwhile;   ?>

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>
<!-- end webdev -->
</div>

<!-- #Languages -->

<!-- #software skills -->
<div id="software" class="columns medium-6">    
    <div id="IT" class="row text-center">
        <div class="row">
            <hr>
            <h3><?php _e('IT skills','checkers');?></h3>
            <hr>
        </div>
    </div>
    
<?php $it_query = new WP_Query( array('post_type' => 'cv', 'meta_key' => 'it' ));   if ( $it_query->have_posts() ) :  while ( $it_query->have_posts() ) : $it_query->the_post(); $it = get_post_meta( $post->ID, 'it', true ); if( !empty( $it ) ) : foreach( $it as $i) : ?>    
  <div class="row">
      <div class="row columns small-12">
        <p><?php echo $i['name'];?>&nbsp;<small><?php echo $i['description'];?></small></p>
      </div>
      
  </div>
    
       <?php endforeach; endif; endwhile;   ?>

<?php else : ?>
	<div class="columns">
		<p><?php _e( 'This content will be available soon, I apologize for any incoveniences this may cause.' , 'checkers' ); ?></p>
    </div>
<?php endif; wp_reset_query()?>

</div>

</div><!-- End CV-->
