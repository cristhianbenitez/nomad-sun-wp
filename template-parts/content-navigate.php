<div class="flex flex-wrap container ">
  <?php
  global $hero_post;
  $args = [
    'posts_per_page' => 4,
    // this will make sure it doesn’t show us the hero post
    'post__not_in' => [$hero_post],
    'orderby' => 'rand',
  ];

  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
      $the_query->the_post(); ?>

      <a href="<?php the_permalink(); ?>" class='block sm:pl-4 lg:pl-8 fist:pl-0 even:w-2/3 odd:w-1/3'>
        <div class='aspect-square pb-[416px] relative h-0'>
          <div class='bg-cover bg-center flex justify-center items-center inset-0 absolute w-full h-[416px] z-[100]' style='<?php nice_background(
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
