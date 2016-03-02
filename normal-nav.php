<div id="nav-container" class="show-for-medium hide-for-print float-left">
    <aside id="large-nav" class="pattern columns medium-5" >
    	<div class="mask">
        <div id="centered">
        	
            <!-- WEB LOGO -->
                <?php get_template_part('logo')?>
            <!-- end WEB LOGO -->           
            
            
            <!-- LANGUAGE FILTER -->
            <div id="lang-filter" class="columns medium-12">
                <button class="button" type="button" data-toggle="language"><?php _e('Choose language', 'checkers')?></button>
                <a href="<?php $interview = get_page_by_title('Interview questions'); get_permalink($interview);?>" class="grey button" type="button"><?php echo get_the_title($interview); ?></a>
                <?php if (get_locale() == 'en_UK')?><a href="<?php bloginfo('url')?>/wp-content/uploads/cl/CL-CarlosWu-uk.pdf" class="button" type="button"><?php _e('Cover letter','checkers') ?></a>
                   
            </div>
            <!-- end LANGUAGE FILTER -->
            <div class="clearfix"></div>
           
            <!-- CLAIM SENTENCE OF SITE -->
            <div id="claim" class="columns">
            	
                <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-use-m-u-i="false" data-options="pauseOnHover:false">
                  <ul class="orbit-container">
                    <li class="is-active orbit-slide">
                      <div>
                        <p><?php _e('Site optimized for recruiters and headhunters.', 'checkers')?></p>
                      </div>
                    </li>
                    <li class="orbit-slide">
                      <div>
                        <p><?php _e('Web developer. Specialized in WordPress and UX design for business-oriented purposes.', 'checkers')?></p>
                      </div>
                    </li>
                    <li class="orbit-slide">
                      <div>
                        <p><?php _e('Business process analysis (bottlenecks), financial gap analysis, stakeholder\'s change management (workshops), project management.', 'checkers')?></p>
                      </div>
                    </li>
                    <li class="orbit-slide">
                      <div>
                        <p><?php $url1 = 'http://carkod.com/music'; $url2 = 'http://carkod.com/psychology'; echo sprintf(wp_kses( __('Want to know more? I am also a <a href="%s">music arranger enthusiast</a> and I like to experiment with <a href="%s">social psychology.</a>', 'checkers'), array(  'a' => array( 'href' => array() ) ) ) , esc_url( $url1 ), esc_url( $url2 ))?></p>
                      </div>
                    </li>
                  </ul>
  
			</div>
                
                <div id="down-filter">
                    <a href="<?php bloginfo('url')?>/wp-content/uploads/cv/<?php if(get_locale()=='en_US') {
						echo "CV-CarlosWu-us.pdf";
						} elseif(get_locale()=='es_ES') {
						echo "CV-CarlosWu-es.pdf";
						} elseif(get_locale()=='zh_CN') {
						echo "CV-CarlosWu-cn.pdf";
						
						} elseif(get_locale()=='zh_TW') {
						echo "CV-CarlosWu-tw.pdf";
						} else {
						echo "CV-CarlosWu-uk.pdf";
						}
					
					 ?>" id="down-text" class="hollow large button columns medium-12 small-12 large-6" type="button" data-open="download" target="_blank"><?php _e('Download CV', 'checkers')?>&nbsp;<span class="fa fa-file-pdf-o fa-pull-right"></span></a>
                	
					<?php if (is_home()) { ?>
                    <a href="<?php bloginfo('url')?>/#contact" id="drop-text" class="large button medium-12 small-12 large-6 columns">
                    	<?php _e('Drop me a line', 'checkers')?>
                    &nbsp;<span class="fa fa-arrow-circle-right fa-lg"></span>
						
                    </a>
					<?php } else { ?>
                    <a href="<?php bloginfo('url')?>" id="drop-text" class="large button medium-12 small-12 large-6 columns"><span class="fa fa-arrow-circle-left fa-lg"></span>&nbsp;
                        <?php _e('Back to CV', 'checkers');?>
                    
                    </a>
                    <?php } ?>
                
            </div>
                
            </div>
            <!-- end CLAIM SENTENCE -->
        	<div class="clearfix"></div>
            <!-- CV NAVIGATION -->
	            <?php if ( is_home() ) { get_template_part('cv','nav'); } ?>
            <!-- end CV NAVIGATION -->
            
         </div>
         </div><!-- End of mask -->
    </aside>
    
</div>


<!-- Modals outside design box -->
<div id="modals">

    <div class="reveal" id="language" data-reveal>
    	<div class="button-group">
        	<h2 class="subheader"><?php _e('Choose language', 'checkers')?></h2>
                <a class="button" href="http://carloswu.xyz">English</a>
                <a class="button" href="http://carloswu.xyz/es">Español</a>
                <a class="button" href="http://carloswu.xyz/cn">中文</a>
        </div>
 			<button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
</button>
	</div>
    
    
</div>