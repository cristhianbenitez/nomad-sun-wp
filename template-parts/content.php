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
		<?php if (have_rows('content')):
    while (have_rows('content')):
      the_row();

      if (get_row_layout() == 'header'): ?>
		<?php get_template_part('template-parts/content-header'); ?>

		<?php elseif (get_row_layout() == 'text_block'): ?>
			<?php get_template_part('template-parts/content-text'); ?>

		<?php elseif (get_row_layout() == 'gallery'): ?>
			<?php get_template_part('template-parts/content-gallery'); ?>

		<?php endif;
    endwhile;
  endif; ?>
	</div><!-- .entry-content -->



		<?php get_template_part('template-parts/content-explore'); ?>

	<footer class="entry-footer">
		<!-- <?php nomad_sun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->


</article><!-- #post-<?php the_ID(); ?> -->
