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
						<div class="w-full md:w-[57%] min-h-[50vh] md:min-h-screen bg-blue-600 bg-cover bg-center" style="<?php nice_background(
        'hero_image'
      ); ?>">
						</div>
						<div class="md:w-[43%] flex flex-col text-center mx-auto">
							<p class="text-tiny mb-20 mt-16 font-archivo tracking-widest underline-border">
								<?php format_date(get_field('date')); ?></p>
							<div class="max-w-[345px] sm:max-w-[487px] m-auto ">
								<h1 class="text-4xl md:text-5xl"><?php the_title(); ?></h1>
								<h2 class="text-4xl md:text-5xl mb-6 md:mb-16 uppercase w-[346px] sm:w-auto"><?php the_field(
          'subhead'
        ); ?></h2>
								<p class="text-xl italic font-cardo md:px-3"><?php the_sub_field(
          'header_intro'
        ); ?></p>
							</div>
						</div>
					</div>

					<!--Text Component -->
				<?php
        # code...

        elseif (get_row_layout() == 'text_block'): ?>
					<div class="max-w-screen-sm mx-4 sm:mx-auto my-20 custom-header ">
						<?php the_sub_field('text_content'); ?>
					</div>

				<?php elseif (get_row_layout() == 'gallery'): ?>
					<div class="max-w-screen-sm mx-4 sm:mx-auto my-20 custom-header ">
						<?php
      $gallery_images = the_sub_field('gallery');
      echo is_array($gallery_images);
      ?>
					</div>


		<?php endif;
    endwhile;
  endif; ?>
	</div><!-- .entry-content -->

<section class="gallery-image">
		<?php echo wp_get_attachment_image(70, 'full'); ?>

		<p class='max-w-[868px] text-base font-archivoRegular opacity-50 mt-6' >
			<?php echo wp_get_attachment_caption(70); ?>
		</p>
</section>


	<footer class="entry-footer">
		<!-- <?php nomad_sun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->


</article><!-- #post-<?php the_ID(); ?> -->
