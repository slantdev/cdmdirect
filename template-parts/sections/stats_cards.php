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

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative z-20">
    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-[#BFF3FF] mix-blend-color-burn opacity-50"></div>
      <img src="<?php echo cdmdirect_asset('images/banner/hero-banner-02.jpg') ?>" alt="" class="object-bottom object-cover h-full w-full opacity-100">
    </div>
    <div class="container max-w-screen-xl relative pt-32 pb-0">
      <div class="flex">
        <div class="w-2/3">
          <h4><span class="inline-block pb-3 border-b-2 border-white text-lg text-white font-medium">Who we are</span></h4>
          <h3 class="text-[34px] leading-tight font-bold text-brand-bluedark mt-6 mb-6">CDM Direct is a well established global operation</h3>
          <p class="text-lg text-white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <div class="w-1/3">
          <?php echo cdmdirect_icon(array('icon' => 'play-button', 'group' => 'utilities', 'size' => '120', 'class' => 'text-brand-blue mx-auto mt-10')); ?>
        </div>
      </div>
    </div>
    <div class="container max-w-screen-xl relative translate-y-1/4">
      <div class="grid grid-cols-3 gap-x-12">
        <div class="bg-white rounded-lg p-10 text-center shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="font-light text-[48px] text-brand-blue">500+</div>
          <div class="w-16 h-0.5 bg-brand-yellow mx-auto mt-3 mb-5"></div>
          <h5 class="text-brand-bluedark font-bold text-xl leading-tight mb-4">Experienced Employees</h5>
          <p class="line-clamp-3 font-nunito">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
          </p>
        </div>
        <div class="bg-white rounded-lg p-10 text-center shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="font-light text-[48px] text-brand-blue">3</div>
          <div class="w-16 h-0.5 bg-brand-yellow mx-auto mt-3 mb-5"></div>
          <h5 class="text-brand-bluedark font-bold text-xl leading-tight mb-4">APAC Locations</h5>
          <p class="line-clamp-3 font-nunito">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
          </p>
        </div>
        <div class="bg-white rounded-lg p-10 text-center shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="font-light text-[48px] text-brand-blue">30+</div>
          <div class="w-16 h-0.5 bg-brand-yellow mx-auto mt-3 mb-5"></div>
          <h5 class="text-brand-bluedark font-bold text-xl leading-tight mb-4">Years Experience</h5>
          <p class="line-clamp-3 font-nunito">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>