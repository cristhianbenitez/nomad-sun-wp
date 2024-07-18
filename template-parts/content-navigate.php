<div class="flex flex-col sm:flex-row sm:flex-wrap container w-[343px] sm:w-full gap-4 sm:gap-0">
  <?php
  global $hero_post;
  $args = [
    'posts_per_page' => 4,
    // this will make sure it doesn’t show us the hero post
    'post__not_in' => [$hero_post],
    'orderby' => 'rand',
  ];

  $the_query = new WP_Query($args);
  $item_number = 0;
  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
      $the_query->the_post();
      $item_number++; ?>

      <a href="<?php the_permalink(); ?>" class='block sm:pl-4 lg:pl-6 sm:mb-6 sm:fist:pl-0  w-1/3 sm:<?php if ($item_number == 2) : echo 'w-2/3';
                                                                                                      elseif ($item_number == 3) : echo 'w-2/3';
                                                                                                      endif; ?>'>
        <div class='sm:aspect-square pb-[343px] sm:pb-[416px] w-full relative h-0 '>
          <div class='bg-cover bg-center flex justify-center items-center inset-0 absolute sm:w-full h-[343px] w-[343px] sm:h-[416px] z-[100]' style='<?php nice_background(
                                                                                                                                                        'hero_image'
                                                                                                                                                      ); ?>'>
            <p class='font-archivo text-2xl text-white mb-0 text-center'>
              <?php the_title(); ?>
            </p>
          </div>
        </div>
      </a>

  <?php
    endwhile;
  endif;
  ?>
</div>
