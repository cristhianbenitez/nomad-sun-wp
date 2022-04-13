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
      // Header Component
      if (get_row_layout() == 'header'): ?>
					<div class="block md:flex">
						<div class="w-full md:w-[57%] min-h-[50vh] md:min-h-screen bg-blue-600 bg-cover bg-center" style="background-image: url(
								<?php if (get_field('hero_image')):
          the_field('hero_image');
        endif; ?>);">
						</div>
						<div class="md:w-[43%] flex flex-col text-center mx-auto">
							<p class="text-tiny mb-20 mt-16 font-archivo tracking-widest relative before:content-[''] before:absolute before:w-10  before:border-t before:border-black before:right-2/4 before:translate-x-1/2 before:top-10">
								<?php echo date(' F Y', strtotime(get_field('date'))); ?></p>
							<div class="max-w-[345px] sm:max-w-[487px] m-auto ">
								<h1 class="text-4xl md:text-5xl"><?php the_title(); ?></h1>
								<h2 class="text-4xl md:text-5xl mb-16 whitespace-nowrap sm:whitespace-normal"><?php the_field(
          'subhead'
        ); ?></h2>
								<p class="text-xl italic font-cardo md:px-3"><?php the_sub_field(
          'header_intro'
        ); ?></p>
							</div>
						</div>
					</div>

					<!--Text Component -->
				<?php elseif (get_row_layout() == 'text_block'): ?>
					<div class="max-w-screen-sm mx-4 sm:mx-auto my-20 custom-header ">
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
