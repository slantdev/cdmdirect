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

<section id="<?php echo $section_id ?>" class="bg-brand-blue" style="<?php echo $section_style ?>">
  <div class="relative z-10 <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-md text-center text-white relative">
      <div>
        <h3 class="text-[34px] leading-tight font-bold text-white mt-6 mb-6">What our clients say about us</h3>
        <p class="font-nunito text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="flex flex-col items-center mt-10">
        <img class="rounded-full max-w-[148px]" src="<?php echo cdmdirect_asset('images/testimonials/mercedes-benz.jpg') ?>" alt="">
        <h5 class="text-xl font-bold mt-6 mb-2">Kevin Drives</h5>
        <p class="font-nunito">Marketing expert - ReeDip</p>
      </div>
    </div>
    <div class="absolute top-0 right-0 -z-10 opacity-[65%] overflow-hidden">
      <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '652', 'height' => '384', 'class' => 'text-[#47A0FA] scale-x-[-1] rotate-[0deg] -translate-y-[150px] translate-x-[100px]')); ?>
    </div>
    <div class="absolute bottom-0 left-20 -z-10 opacity-[65%] overflow-hidden">
      <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '276', 'height' => '162', 'class' => 'text-[#47A0FA] scale-x-[-1] rotate-[0deg] translate-y-[80px] translate-x-[0px]')); ?>
    </div>
  </div>
</section>