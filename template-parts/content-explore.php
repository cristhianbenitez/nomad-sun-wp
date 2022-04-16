
<section class='container text-center mt-20'>
  		<p class="font-archivo tracking-widest text-tiny relative underline-border before:border-black  before:-top-8">
				Share
				</p>
<h2 class='hidden sm:block font-archivo text-4xl max-w-[319px] mx-auto uppercase mt-36'>Let’s Explore Together</h2>

<div class='hidden sm:flex flex-wrap justify-between items-center mt-12'>
  <?php
  // organise our options into a data object
  $args = [
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'post__not_in' => [get_the_ID()],
  ];
  // a variable with our query and options
  $query = new WP_Query($args);
  // do a loop with our new query code
  if ($query->have_posts()):
    while ($query->have_posts()):
      $query->the_post(); ?>
<a href="<?php the_permalink(); ?>" class='block w-1/3 sm:pl-4 lg:pl-8 fist:pl-0'>
<div class='aspect-square pb-[100%] relative h-0'>
 <div class='bg-cover bg-center flex justify-center items-center inset-0 absolute w-full h-full z-[100]' style='<?php nice_background(
   'hero_image'
 ); ?>'>
    <p class='font-archivo text-2xl text-white'>
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

</section>
