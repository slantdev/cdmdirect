<?php
/*
 * Single Page Header
 */
?>
<section class="relative min-h-[60vh] flex flex-col justify-end bg-brand-bluedark">
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 mix-blend-multiply bg-black/50"></div>
    <?php
    $featured_image = get_the_post_thumbnail_url();
    if ($featured_image) {
      echo '<img src="' . $featured_image . '" alt="' . get_the_title() . '" class="object-cover h-full w-full">';
    }
    ?>
  </div>
  <div class="container max-w-screen-xl relative z-10 pt-[300px] pb-20 h-full">
    <div class="flex h-full items-center text-white">
      <div class="w-1/2">
        <h1 class="font-bold text-[50px] leading-tight"><?php echo get_the_title() ?></h1>
        <div class="text-lg mt-6"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-lg"><?php echo get_the_date(); ?></time></div>
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