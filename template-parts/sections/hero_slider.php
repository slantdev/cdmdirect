<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

$hero_slider = get_sub_field('hero_slider');

if ($hero_slider) : ?>
  <section class="">
    <div id="hero-slider" class="swiper bg-black relative h-screen">
      <div class="swiper-wrapper">
        <?php foreach ($hero_slider as $slide) : ?>
          <?php
          $slide_image = $slide['slide_image'];
          $bg_overlay = $slide['bg_overlay'];
          $sub_headline = $slide['sub_headline'];
          $headline = $slide['headline'];
          $description = $slide['description'];
          $buttons = $slide['buttons'];

          $overlay_style = '';
          if ($bg_overlay) {
            $overlay_style = 'background-color: ' . $bg_overlay;
          }
          ?>
          <div class="swiper-slide">
            <?php if ($slide_image) : ?>
              <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-[#4A4A4A]/70 mix-blend-multiply" style="<?php echo $overlay_style ?>"></div>
                <img src="<?php echo $slide_image['url'] ?>" alt="<?php echo $slide_image['alt'] ?>" class="object-cover h-full w-full opacity-100">
              </div>
            <?php endif; ?>
            <div class="container max-w-screen-xl relative z-10 pt-52 lg:pt-[216px] pb-10 h-full">
              <div class="flex h-full items-center text-white lg:px-24 xl:px-28 2xl:px-0">
                <div class="max-w-[880px]">
                  <?php if ($sub_headline) : ?>
                    <h2 class="font-bold text-xl lg:text-2xl xl:text-[28px]"><?php echo $sub_headline; ?></h2>
                    <div class="w-14 lg:w-[70px] border-b-[3px] border-solid border-brand-orange my-6"></div>
                  <?php endif; ?>
                  <?php if ($headline) : ?>
                    <h1 class="font-light text-4xl lg:text-5xl xl:text-[54px] lg:leading-tight"><?php echo $headline; ?></h1>
                  <?php endif; ?>
                  <?php if ($description) : ?>
                    <div class="mt-6 text-base lg:text-lg font-medium">
                      <?php echo $description; ?>
                    </div>
                  <?php endif; ?>
                  <?php
                  //preint_r($buttons);
                  ?>
                  <?php get_template_part('template-parts/components/buttons', '', array('field' => $buttons, 'class' => 'mt-6 xl:mt-12')); ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <script>
      const swiper = new Swiper('#hero-slider', {
        loop: true,
        // pagination: {
        //   el: '#hero-slider .swiper-pagination',
        // },
        navigation: {
          nextEl: '#hero-slider .swiper-button-next',
          prevEl: '#hero-slider .swiper-button-prev',
        },
      });
    </script>
  </section>
<?php endif; ?>