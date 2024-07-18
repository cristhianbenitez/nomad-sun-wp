	<div class="block md:flex " style="margin-bottom: 3rem;">
		<div class="w-full md:w-[57%] min-h-[50vh] md:min-h-screen bg-cover bg-center" style="<?php nice_background(
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
