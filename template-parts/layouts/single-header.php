<?php
/*
 * Single Page Header
 */
?>
<section class="relative xl:min-h-[60vh] flex flex-col justify-end bg-brand-bluedark">
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 mix-blend-multiply bg-black/50"></div>
    <?php
    $featured_image = get_the_post_thumbnail_url();
    if ($featured_image) {
      echo '<img src="' . $featured_image . '" alt="' . get_the_title() . '" class="object-cover h-full w-full">';
    }
    ?>
  </div>
  <div class="container max-w-screen-xl relative z-10 pt-52 xl:pt-[216px] pb-16 xl:pb-10 h-full">
    <div class="flex flex-col md:flex-row h-full items-center text-white">
      <div class="w-full max-w-prose">
        <h1 class="font-bold text-[40px] lg:text-[50px] leading-tight"><?php echo get_the_title() ?></h1>
        <div class="mt-4 lg:mt-6 text-base lg:text-lg"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-lg"><?php echo get_the_date(); ?></time></div>
      </div>
    </div>
  </div>
</section>

<div class="bg-brand-graylight py-6">
  <div class="container max-w-screen-xl">
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<div class="breadcrumb">', '</div>');
    }
    ?>
  </div>
</div>