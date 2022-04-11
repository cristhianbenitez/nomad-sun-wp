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


	<section class="hero" style="background-image: url(
			<?php if (get_field('hero_image')) : the_field('hero_image');
			endif;  ?>);">

		<div class="hero__content ">
			<h1 class="hero__head"><?php the_title() ?></h1>
			<?php if (get_field('subhead')) : ?>
				<p class="hero__subhead">
					<?php the_field('subhead'); ?>
				</p>
			<?php endif; ?>
			<?php if (get_field('date')) : ?>
				<p class="hero__date">
					<?php echo date("F Y", strtotime(get_field('date')));  ?>
				</p>
			<?php endif; ?>
		</div>
	</section>





	<header class="entry-header">

	</header><!-- .entry-header -->


	<div class="entry-content">

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php nomad_sun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
