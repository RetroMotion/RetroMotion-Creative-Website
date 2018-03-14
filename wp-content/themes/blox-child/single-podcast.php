<?php get_header(); ?>

			<!--BEGIN #primary .hfeed-->
			<div id="primary" class="hfeed">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php zilla_post_before(); ?>
				<!--BEGIN .hentry -->
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php zilla_post_start(); ?>

					<?php
					$format = get_post_format();
					get_template_part( 'content', $format );
					?>

                <?php zilla_post_end(); ?>
                <!--END .hentry-->
				</div>
				<?php zilla_post_after(); ?>

				<?php
				    zilla_comments_before();
				    comments_template('', true);
				    zilla_comments_after();
				?>

				<?php endwhile; else: ?>

				<!--BEGIN #post-0-->
				<div id="post-0" <?php post_class() ?>>

					<h1 class="entry-title"><?php _e('Error 404 - Not Found', 'zilla') ?></h1>

					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p><?php _e("Sorry, but you are looking for something that isn't here.", "zilla") ?></p>
					<!--END .entry-content-->
					</div>

				<!--END #post-0-->
				</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-md-4 text-center">
					<a href="https://itunes.apple.com/us/podcast/retromotion-creative/id1331688436?mt=2" target="_blank"><img src="/wp-content/uploads/2018/02/itunes.png"></a>
				</div>
				<div class="col-md-4 text-center">
					<a href="https://play.google.com/music/m/Izcfjn4qp47qnhzseke36zrnirm?t=RetroMotion_Podcast" target="_blank"><img src="/wp-content/uploads/2018/02/googleplay.png"></a>
				</div>
				<div class="col-md-4 text-center">
					<a href="https://www.stitcher.com/podcast/retromotion-creative/retromotion-podcast" target="_blank"><img src="/wp-content/uploads/2018/02/stitcher.png"></a>
				</div>
			</div>
			&nbsp;
			<div class="spacer-20"></div>

			<p><a style="display:block; position:relative; top:-50px;" id="contactblog"></a></p>
			<h2 class="form-title">Subscribe to the podcast</h2>
			<p>Get notified of the latest episodes!</p>
			<?php echo do_shortcode('[gravityform id="11" title="false" description="false" ajax="true"]'); ?>
			<!--END #primary .hfeed-->
			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
