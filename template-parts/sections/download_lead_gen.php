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
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-xl">
      <div class="bg-brand-bluedark rounded-lg p-10 text-white">
        <h3 class="text-[34px] font-semibold mb-6">Download the Outsourcing Handbook</h3>
        <div class="text-lg font-medium">
          There are many advantages and disadvantages to consider when outsourcing your customer support. Not ready to pull the trigger but want to know more? Complete the form and download our e-book now.
        </div>
        <div class="flex gap-x-6 mt-6">
          <input type="text" class="grow w-full text-lg placeholder:text-white/50 bg-transparent border-t-0 border-x-0 border-b-2 border-white focus:outline-none focus:ring-0" placeholder="Business Name">
          <input type="text" class="grow w-full text-lg placeholder:text-white/50 bg-transparent border-t-0 border-x-0 border-b-2 border-white focus:outline-none focus:ring-0" placeholder="Email">
          <input type="text" class="grow text-lg placeholder:text-white/50 bg-transparent border-t-0 border-x-0 border-b-2 border-white focus:outline-none focus:ring-0" placeholder="Phone">
          <div class="flex-none"><button class="btn btn-yellow text-brand-bluedark">Download Now</button></div>
        </div>
      </div>
    </div>
  </div>
</section>