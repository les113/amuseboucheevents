	
<div class="container">
	<div class="row">	
		<header class="col-md-12 header">
			<div class="sitelogo">
				<a href="<?php echo site_url(); ?>"><img alt="Logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo-black.jpg" /></a>
			</div>

		<!-- bootstrap menu -->   
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php /* function for dropdown menu */
					wp_nav_menu( array(
					  'theme_location' => 'top-menu',
					  'depth' => 2,
					  'container' => false,
					  'menu_class' => 'nav navbar-nav',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker()
					  )
					);
				?>
			</div><!-- /.navbar-collapse -->	
		</nav>
		</header>	
	</div>
</div><!-- /.container-fluid -->
