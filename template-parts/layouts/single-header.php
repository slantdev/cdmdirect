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

<!-- <section>
  <div class="relative bg-cover bg-no-repeat min-h-[12rem] lg:h-[24rem] bg-fiap-teal">
    <div class="container mx-auto h-full relative py-10 lg:py-0 z-10">
      <div class="flex h-full items-center pt-6 md:pt-14">
        <div class="md:w-3/4 lg:w-3/5 text-white">
          <h2 class="text-4xl md:text-[45px] font-light leading-[1.1em] mb-4"><?php echo get_the_title() ?></h2>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="bg-fiap-light py-6">
    <div class="container mx-auto">
      <?php /* fiap_breadcrumb(); */ ?>
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumbs inline-block text-black text-base">', '</div>');
      }
      ?>
    </div>
  </div>
</section> -->