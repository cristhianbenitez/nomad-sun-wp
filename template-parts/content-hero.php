	<a class="hero h-screen flex flex-col items-center justify-center bg-cover bg-center " style="<?php nice_background(
																																																	'hero_image'
																																																); ?> " href="<?php the_permalink() ?>">

		<div class="text-white text-center uppercase max-w-[752px]">
			<h1 class="text-4xl md:text-6xl mb-[10px]"><?php the_title(); ?></h1>
			<?php if (get_field('subhead')) : ?>
				<p class="text-4xl md:text-6xl mb-44">
					<?php the_field('subhead'); ?>
				</p>
			<?php endif; ?>
			<?php if (get_field('date')) : ?>
				<p class="font-archivo tracking-widest text-tiny relative underline-border before:border-white before:-top-8">
					<?php format_date(get_field('date')); ?>
				</p>
			<?php endif; ?>
		</div>
	</a>
