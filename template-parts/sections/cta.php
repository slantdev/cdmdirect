<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

$text = get_sub_field('text');
$button = get_sub_field('button');

?>

<section class="pt-12 md:pt-16 lg:pt-20 pb-12 md:pb-14 lg:pb-16 bg-[#E4EDF2] relative z-10 overflow-hidden">
  <div class="container max-w-screen-xl">
    <div class="flex flex-col md:flex-row md:gap-x-10 md:justify-between md:items-center">
      <?php if ($text) { ?>
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'text', 'class' => 'font-semibold text-[22px] text-[#554D89]')); ?>
      <?php } ?>
      <div class="mt-4 md:mt-0">
        <?php get_template_part('template-parts/components/buttons', '', array('field' => 'button', 'class' => '!text-left md:!text-right !mb-0 whitespace-nowrap')); ?>
      </div>
    </div>
  </div>
  <div class="absolute top-0 right-20 -z-10 overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-3', 'group' => 'shape', 'width' => '168', 'height' => '158', 'class' => 'text-white scale-x-[-1] rotate-[0deg] -translate-y-[100px] translate-x-[0px]')); ?>
  </div>
  <div class="absolute bottom-0 left-0 -z-10 overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-2', 'group' => 'shape', 'width' => '590', 'height' => '558', 'class' => 'text-white scale-x-[-1] rotate-[0deg] translate-y-[450px] -translate-x-[120px]')); ?>
  </div>
</section>