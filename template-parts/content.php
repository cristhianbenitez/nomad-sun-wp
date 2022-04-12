<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomad-sun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php if (have_rows('content')) : while (have_rows('content')) : the_row();
				if (get_row_layout() == 'header') : ?>

					<div class="flex">
						<div class="w-3/5 min-h-screen bg-blue-600 bg-cover bg-left" style="background-image: url(
								<?php if (get_field('hero_image')) :
									echo the_field('hero_image');
								endif;  ?>);"></div>
						<div></div>
					</div>


					<?php the_field('date'); ?>

					<?php the_title(); ?>
					<?php the_field('subhead'); ?>

					<?php the_sub_field('header_intro'); ?>


				<?php elseif (get_row_layout() == 'text_block') : ?>
					<?php the_sub_field('text_content'); ?>
		<?php endif;
			endwhile;
		endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php nomad_sun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
