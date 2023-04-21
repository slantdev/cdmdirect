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
$description = get_sub_field('description');
$form_shortcode = get_sub_field('form_shortcode');
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-xl">
      <div class="bg-brand-bluedark rounded-lg p-10 text-white">
        <?php if ($headline) : ?>
          <h3 class="text-[34px] font-semibold mb-6"><?php echo $headline ?></h3>
        <?php endif; ?>
        <?php if ($description) : ?>
          <div class="text-lg font-medium">
            <?php echo $description ?>
          </div>
        <?php endif; ?>
        <?php if ($form_shortcode) : ?>
          <div class="leadgen-form">
            <?php echo do_shortcode($form_shortcode) ?>
          </div>
        <?php else : ?>
          <div class="flex gap-x-6 mt-6">
            <input type="text" class="grow w-full text-lg placeholder:text-white/50 bg-transparent border-t-0 border-x-0 border-b-2 border-white focus:outline-none focus:ring-0" placeholder="Business Name">
            <input type="text" class="grow w-full text-lg placeholder:text-white/50 bg-transparent border-t-0 border-x-0 border-b-2 border-white focus:outline-none focus:ring-0" placeholder="Email">
            <input type="text" class="grow text-lg placeholder:text-white/50 bg-transparent border-t-0 border-x-0 border-b-2 border-white focus:outline-none focus:ring-0" placeholder="Phone">
            <div class="flex-none"><button class="btn btn-yellow text-brand-bluedark">Download Now</button></div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>