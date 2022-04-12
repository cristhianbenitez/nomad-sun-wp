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
						<div class="w-[57%] min-h-screen bg-blue-600 bg-cover bg-center" style="background-image: url(
								<?php if (get_field('hero_image')) :
									the_field('hero_image');
								endif;  ?>);">
						</div>
						<div class="w-[43%] flex flex-col text-center mx-auto">
							<p class="text-tiny mt-16 font-archivo tracking-widest relative before:content-[''] before:absolute before:w-10  before:border-t before:border-black before:right-2/4 before:translate-x-1/2 before:top-10">
								<?php echo date(" F Y", strtotime(get_field('date')));  ?></p>

							<div class="max-w-[487px] m-auto ">
								<h1 class="text-5xl"><?php the_title(); ?></h1>
								<h2 class="text-5xl mb-16"><?php the_field('subhead'); ?></h2>
								<p class="text-xl italic font-cardo px-3"><?php the_sub_field('header_intro'); ?></p>
							</div>
						</div>
					</div>
				<?php elseif (get_row_layout() == 'text_block') : ?>
					<div class="max-w-[639px] mx-auto my-20 custom-header">
						<?php the_sub_field('text_content'); ?>
					</div>
		<?php endif;
			endwhile;
		endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php nomad_sun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
