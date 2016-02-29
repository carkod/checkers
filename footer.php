<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Scripts -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/slick.min.js"></script>
    	
    <script type="text/javascript">
    $(document).foundation();
			jQuery(document).ready(function(){
				$('#portfolio-slider').slick({
		  dots: true,
		  infinite: true,
		  slidesToShow: 1,
		  variableWidth:true,
		  centerMode:true,
		  centerPadding: '80px',
		  autoplay: true,
		  arrows: false,
				});
	});
    </script>
    
<!-- Google analytics (copy from carkodesign) -->

<?php wp_footer(); ?>
</body>
</html>