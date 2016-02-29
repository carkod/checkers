<div class="hide-for-medium off-canvas position-left" id="offCanvas" data-off-canvas >
    <aside id="responsive-nav" class="float-center">
    	<?php get_template_part('logo')?>
        <div id="cvfilter" class="row small-up-1 medium-up-3">
            <div id="filter1" class="column">
                <h2><?php _e('Choose language', 'checkers')?></h2>
                <hr>
                <ul class="menu vertical">
                    <li><a href="#">English</a></li>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">中文</a></li>          
                </ul>
            </div>
            
            <div id="filter1" class="column">
                <h2><a href="<?php bloginfo('url')?>/wp-content/uploads/cv/<?php if(get_locale()=='en_US') {
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
					
					 ?>"><?php _e('Download CV', 'checkers')?></a></h2>
                <hr>
            </div>
        </div>    
    </aside>
</div> 
<!-- End off canvas menu-->