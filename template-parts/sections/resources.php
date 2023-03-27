<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

?>

<section class="pt-20 pb-16 bg-[#E4EDF2] relative z-10">
  <div class="container max-w-screen-xl">
    <div class="flex justify-between items-center">
      <div class="font-semibold text-[22px] text-[#554D89]">Build your <span class="text-brand-orange">successful business</span> with us. Want to know how to do this?</div>
      <div><a href="#" class="btn btn-orange">Contact Us</a></div>
    </div>
  </div>
  <div class="absolute top-0 right-20 -z-10 overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-3', 'group' => 'shape', 'width' => '168', 'height' => '158', 'class' => 'text-white scale-x-[-1] rotate-[0deg] -translate-y-[100px] translate-x-[0px]')); ?>
  </div>
  <div class="absolute bottom-0 left-0 -z-10 overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-2', 'group' => 'shape', 'width' => '590', 'height' => '558', 'class' => 'text-white scale-x-[-1] rotate-[0deg] translate-y-[450px] -translate-x-[120px]')); ?>
  </div>
</section>