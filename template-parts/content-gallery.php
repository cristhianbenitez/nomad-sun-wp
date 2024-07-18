<div class='container flex flex-wrap justify-center'>
	<?php $images = get_sub_field('gallery'); ?>
	<?php foreach ($images as $image) : ?>
		<div class="gallery-image px-4 mb-4 sm:mb-8 sm:<?php echo the_field('image_width', $image['id']); ?> flex flex-col">
			<div class="w-full h-full overflow-hidden">
				<?php
				echo wp_get_attachment_image(
					$image['id'],
					'full',
					false,
					array(
						'class' => 'w-full h-full object-cover',
					)
				);
				?>
			</div>
			<?php $caption = wp_get_attachment_caption($image['id']); ?>
			<?php if (!empty($caption)) : ?>
				<p class='max-w-[868px] text-base font-archivoRegular opacity-50 mt-6'>
					<?php echo wp_get_attachment_caption($image['id']); ?>
				</p>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>
