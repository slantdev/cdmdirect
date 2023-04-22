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
      <div class="flex">
        <div class="w-1/2 pr-20">
          <?php if ($headline) : ?>
            <h2 class="text-brand-blue text-[34px] font-bold mb-4"><?php echo $headline ?></h2>
          <?php endif; ?>
          <?php if ($description) : ?>
            <div class="prose max-w-none">
              <?php echo $description ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="w-1/2">
          <?php if ($form_shortcode) : ?>
            <div class="contactform-2">
              <?php echo do_shortcode($form_shortcode) ?>
            </div>
          <?php else : ?>
            <div class="grid grid-cols-2 gap-6 mb-6">
              <div><input type="text" placeholder="First Name" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
              <div><input type="text" placeholder="Last Name" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></div>
              <div><input type="text" placeholder="Phone" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
              <div><input type="text" placeholder="Email" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></div>
              <div><input type="text" placeholder="Company Name" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
              <div><input type="text" placeholder="Position" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></div>
              <div class="col-span-2"><input type="text" placeholder="Area of Inquiry" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
              <div class="col-span-2"><textarea placeholder="Message" class="textarea text-base w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></textarea></div>
            </div>
            <button class="btn btn-primary"><span>Send message</span></button>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>