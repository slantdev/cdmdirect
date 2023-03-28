<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

$headline = get_sub_field('headline');
$logo_gallery = get_sub_field('logo_gallery');
$size = 'full';

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <?php if ($headline) : ?>
      <div class="container max-w-screen-xl">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'headline', 'class' => 'leading-tight font-bold text-brand-bluedark mt-6 mb-10 text-center')); ?>
      </div>
    <?php endif; ?>
    <?php if ($logo_gallery) : ?>
      <?php
      $carousel_id = uniqid('carousel-');
      $carousel_loop = 'true';
      $carousel_autoplay_setting = '
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      }
    ';
      ?>
      <div id="<?php echo $carousel_id ?>" class="swiper overflow-visible px-8">
        <div class="swiper-wrapper">
          <?php foreach ($logo_gallery as $logo) : ?>
            <div class="swiper-slide">
              <div class="bg-white shadow-lg rounded-lg pt-8 pb-8 px-8 flex flex-col items-center justify-center">
                <img src="<?php echo esc_url($logo['sizes']['medium']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="flex items-center justify-center gap-x-4 mt-8">
          <button type="button" class="<?php echo $carousel_id ?>--button-prev button-prev w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-brand-blue text-gray-500 hover:text-white transition-all duration-200">
            <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '16', 'class' => 'rotate-180')); ?>
          </button>
          <button type="button" class="<?php echo $carousel_id ?>--button-next button-next w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-brand-blue text-gray-500 hover:text-white transition-all duration-200">
            <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '16', 'class' => '')); ?>
          </button>
        </div>
      </div>
      <?php
      echo '<script>';
      echo 'new Swiper("#' . $carousel_id . '", {';
      echo '
      slidesPerView: "1",
      spaceBetween: 16,
      watchOverflow: true,
      centerInsufficientSlides: true,
      breakpoints: {
        768: {
          slidesPerView: "3",
          spaceBetween: 32
        },
        1280: {
          slidesPerView: "4",
          spaceBetween: 40
        }
      },
      ';
      echo 'navigation: {
      nextEl: ".' . $carousel_id . '--button-next",
      prevEl: ".' . $carousel_id . '--button-prev",
    },';
      echo 'loop: ' . $carousel_loop . ',';
      echo $carousel_autoplay_setting;
      echo '});';
      echo '</script>';
      ?>
    <?php endif; ?>
  </div>
</section>