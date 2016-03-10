<?php get_header(); ?>

<body class="<?php body_class(); ?>">

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            
	<?php get_template_part('responsive', 'nav')?>  
            
        <div class="off-canvas-content" data-off-canvas-content>
            
            <?php get_sidebar(); ?>
			        
            <div id="primary" class="columns medium-7 float-right">
                <main id="main" class="site-main" role="main">
                <?php switch($post_type) {

                    case $post_type == ( is_post_type_archive('projects') || is_tax('job') ) :
                    get_template_part('loop', 'projects'); break;

                    case $post_type == is_post_type_archive('resources')  :
                    get_template_part('loop', 'resources'); break;

                    case $post_type == is_home() :
                    get_template_part('loop'); break;

                    case $post_type == is_page() :
                    get_template_part('loop', 'page'); break;

                } ?>
                
                </main><!-- .site-main -->
                
                <div class="clearfix"></div>
               
                <div id="footer" class="hide-for-print">
                    <footer>
                        <ul>
                            <li><?php _e('Inspired by Maria Pavlyuk','checkers')?>&nbsp;&middot;&nbsp;</li>
                            <li><?php _e('Designed by Carkod','checkers')?>&nbsp;&middot;&nbsp;</li>
                            <li><?php _e('Nourished with Milka chocolate', 'checkers')?></li>
                        </ul>
                    </footer>
            	</div><!-- .content-area -->
        	
            
        
			</div>
            
        </div>
        
    </div>
</div>  
  
<?php get_footer(); ?>