	<section class="hero h-screen flex flex-col items-center justify-center bg-cover bg-center " style="background-image: url(
			<?php if (get_field("hero_image")):
       the_field("hero_image");
   endif; ?>); ">
		<div class="text-white text-center uppercase max-w-[752px]">
			<h1 class="text-6xl mb-[10px]"><?php the_title(); ?></h1>
			<?php if (get_field("subhead")): ?>
				<p class=" text-6xl mb-44">
					<?php the_field("subhead"); ?>
				</p>
			<?php endif; ?>
			<?php if (get_field("date")): ?>
				<p class="font-archivo tracking-widest text-tiny relative before:content-[''] before:absolute before:w-10  before:border-t before:right-2/4 before:translate-x-1/2 before:-top-8">
					<?php echo date(" F Y", strtotime(get_field("date"))); ?>
				</p>
			<?php endif; ?>
		</div>
	</section>
