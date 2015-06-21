<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Admin</title>
		<meta name="description" content="Draggabble Widget Boxes &amp; Containers" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->

		<link href="<?php echo base_url('be/css/bootstrap.min.css') ?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url('be/css/font-awesome.min.css') ?>" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->
		<link rel="stylesheet" href="<?php echo base_url('be/css/ace-fonts.css') ?>" />
		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo base_url('be/css/ace.min.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url('be/css/ace-rtl.min.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url('be/css/ace-skins.min.css') ?>" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?php echo base_url('be/js/ace-extra.min.js') ?>"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<?php echo $header; ?>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<?php echo $kiri; ?>

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
		
				<?php echo $content; ?>
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url('be/js/jquery-2.0.3.min.js') ?>'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url('be/js/jquery.mobile.custom.min.js') ?>'>"+"<"+"/script>");
		</script>
		
		<script src="<?php echo base_url('be/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('be/js/typeahead-bs2.min.js') ?>"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url('be/js/jquery.dataTables.min.js') ?>"></script>
		<script src="<?php echo base_url('be/js/jquery.dataTables.bootstrap.js') ?>"></script>
		<script src="<?php echo base_url('be/js/jquery-ui-1.10.3.custom.min.js') ?>"></script>
		<script src="<?php echo base_url('be/js/jquery.ui.touch-punch.min.js') ?>"></script>
		<script src="<?php echo base_url('be/js/jquery.slimscroll.min.js') ?>"></script>
		<!-- page specific plugin scripts -->
		

		<!-- ace scripts -->

		<script src="<?php echo base_url('be/js/ace-elements.min.js') ?>"></script>
		<script src="<?php echo base_url('be/js/ace.min.js') ?>"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
			
				$('#simple-colorpicker-1').ace_colorpicker({pull_right:true}).on('change', function(){
					var color_class = $(this).find('option:selected').data('class');
					var new_class = 'widget-header';
					if(color_class != 'default')  new_class += ' header-color-'+color_class;
					$(this).closest('.widget-header').attr('class', new_class);
				});
			
			
				// scrollables
				$('.slim-scroll').each(function () {
					var $this = $(this);
					$this.slimScroll({
						height: $this.data('height') || 100,
						railVisible:true
					});
				});
			
				/**$('.widget-box').on('ace.widget.settings' , function(e) {
					e.preventDefault();
				});*/
				  
				// Portlets (boxes)
			    $('.widget-container-span').sortable({
			        connectWith: '.widget-container-span',
					items:'> .widget-box',
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'widget-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer'
			    });
			
			});
		</script>
	</body>
</html>
