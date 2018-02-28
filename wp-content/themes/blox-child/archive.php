<?php get_header(); ?>

			<!--BEGIN #primary .hfeed-->
			<div id="primary" class="hfeed">
				<div class="podcast-type">
					<img src="/wp-content/uploads/2018/02/retro-podcast-world.png" class="text-center">
					<h1 class="entry-title text-center text-green">The RetroMotion Podcast</h1>
					<p>Listen to casual conversations with interesting Vermonters representing a wide range of fields and industries. We talk about everything from marketing and business, to incredible personal stories. You won't want to miss a single episode!</p>

					<div class="row">
						<div class="col-md-4">
							<a href="https://itunes.apple.com/us/podcast/retromotion-creative/id1331688436?mt=2" target="_blank"><img src="/wp-content/uploads/2018/02/itunes.png"></a>
						</div>
						<div class="col-md-4">
							<a href="https://play.google.com/music/m/Izcfjn4qp47qnhzseke36zrnirm?t=RetroMotion_Podcast" target="_blank"><img src="/wp-content/uploads/2018/02/googleplay.png"></a>
						</div>
						<div class="col-md-4">
							<a href="https://www.stitcher.com/podcast/retromotion-creative/retromotion-podcast" target="_blank"><img src="/wp-content/uploads/2018/02/stitcher.png"></a>
						</div>
					</div>
					&nbsp;
					<div class="section-ltgray">
						<?php echo do_shortcode('[gravityform id="11" title="false" description="false" ajax="true"]'); ?>
					</div>
				</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    <?php zilla_post_before(); ?>

				<!--BEGIN .hentry -->
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php zilla_post_start(); ?>

					<?php
					$format = get_post_format();
					get_template_part( 'content', $format );
					?>

                <?php zilla_post_end(); ?>
            	<!--END .hentry -->
				</div>
				<?php zilla_post_after(); ?>

			<?php endwhile; ?>

			<!--BEGIN .navigation .page-navigation -->
			<div class="navigation page-navigation">
				<div class="nav-next"><?php next_posts_link(__('&larr; Older Entries', 'zilla')) ?></div>
				<div class="nav-previous"><?php previous_posts_link(__('Newer Entries &rarr;', 'zilla')) ?></div>
			<!--END .navigation .page-navigation -->
			</div>

			<?php else :

    			if ( is_category() ) { // If this is a category archive
    				printf( __('<h2>Sorry, but there aren\'t any posts in the %s category yet.</h2>', 'zilla'), single_cat_title('',false));
    			} else if ( is_date() ) { // If this is a date archive
    				echo(__('<h2>Sorry, but there aren\'t any posts with this date.</h2>', 'zilla'));
    			} else if ( is_author() ) { // If this is a category archive
    				$userdata = get_userdatabylogin(get_query_var('author_name'));
    				printf(__('<h2>Sorry, but there aren\'t any posts by %s yet.</h2>', 'zilla'), $userdata->display_name);
    			} else {
    				echo(__('<h2>No posts found.</h2>', 'zilla'));
    			}

			endif; ?>

			<!--END #primary .hfeed-->
			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
