<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

	<body <?php body_class(); ?>>

	<!-- page header -->   
	<?php include('pageheader.php') ?>

    <!-- content -->
    <div id="content"> <!-- page content -->

		<div class="container">
			<div class="row">
				<div class="slideshow col-md-12">
					<!-- top slideshow -->
					<?php 
						echo do_shortcode("[metaslider id=56]"); 
					?>
				</div>
			</div>
		</div>

		<section>
			<div class="wrapGradient">
				<div class="container">
					<div class="row featured">	
						<div class="col-sm-4 col-md-4 box1" >
							<a href="<?php echo get_post_meta($post->ID, "feat1-link", true); ?>">
							<div class="featuredBox grow" style="margin-top:25px; overflow:hidden;">
								<div class="imageWrap">
									<!--<img src="<?php //echo get_post_meta($post->ID, "feat1-img", true); ?>"/>-->
									<?php dynamic_sidebar( 'feat1-img' ); ?>
								</div>
								<div class="featuredTitle">
									<h2><?php echo get_post_meta($post->ID, "feat1-heading", true); ?></h2>
								</div>
							</div>
						</a>
						</div>
						<div class="col-sm-4 col-md-4 box2">
							<a href="<?php echo get_post_meta($post->ID, "feat2-link", true); ?>">
							<div class="featuredBox grow" style="overflow:hidden;">
								<div class="imageWrap">
									<!--<img src="<?php //echo get_post_meta($post->ID, "feat2-image", true); ?>"/>-->
									<?php dynamic_sidebar( 'feat2-img' ); ?>
								</div>
								<div class="featuredTitle" style="height:110px;">
									<h2><?php echo get_post_meta($post->ID, "feat2-heading", true); ?></h2>
								</div>
							</div>
						</a>
						</div>
						<div class="col-sm-4 col-md-4 box3">
							<a href="<?php echo get_post_meta($post->ID, "feat3-link", true); ?>">
							<div class="featuredBox grow"  style="margin-top:25px; overflow:hidden;">
								<div class="imageWrap">
									<!--<img src="<?php //echo get_post_meta($post->ID, "feat3-image", true); ?>"/>-->
									<?php dynamic_sidebar( 'feat3-img' ); ?>
								</div>
								<div class="featuredTitle">
									<h2><?php echo get_post_meta($post->ID, "feat3-heading", true); ?></h2>
								</div>
							</div>
						</a>
						</div>			
					</div>
				</div>
			</div>

			<div class="wrapSecondary">
				<div class="container">
					<div class="row">	  
						<div  class="col-md-12 textcenter">
							
							<!-- Start the Loop. --> 
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<!-- Display the Post's Content -->

							<div><h1><?php the_title(); ?></h1></div>
							<div class="dashedline"></div>
							<?php the_content(); ?>

							<!-- Stop The Loop (but note the "else:" - see next line). -->
							<?php endwhile; else: ?>

							<!-- The very first "if" tested to see if there were any Posts to -->
							<!-- display.  This "else" part tells what do if there weren't any. -->
							<h1>Page not found</h1>
							<p>Sorry, that page no longer exists. The page may have been removed or you have followed an obsolete link.
							Please use the site's navigation menus to try again.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

							<!-- REALLY stop The Loop. -->
							<?php endif; ?>

							<!-- /post -->
							
						</div> 
					</div>
				</div>
			</div>
		</section>
  
		<div class="container marginTop marginBottom">
			<div class="row">
				<div class="col-md-12">
					<div class="grow slideshow" style="overflow:hidden;">
						<!-- bottom slideshow -->
						<?php 
							echo do_shortcode("[metaslider id=58]"); 
						?>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- end page container -->   

    <!-- footer -->
	<?php get_footer(); ?>