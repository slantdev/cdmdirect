<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$column_text_class = 'lg:w-2/3';
$column_image_class = 'max-w-[360px] lg:max-w-none lg:w-1/3';
$lead_text = get_sub_field('lead_text');

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative container max-w-screen-xl mx-auto <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-16 xl:gap-x-16 3xl:gap-x-24">
      <div class="w-full order-1 <?php echo $column_image_class ?>">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => 'leading-[1.3] font-bold')); ?>
        <?php get_template_part('template-parts/components/image', '', array('aspect_w' => '1', 'aspect_h' => '1', 'class' => 'h-full w-full object-center object-cover')); ?>
      </div>
      <div class="w-full order-2 <?php echo $column_text_class ?>">
        <?php if ($lead_text) : ?>
          <div class="prose max-w-none xl:prose-lg mb-[1.25em] xl:mb-[1.3333em]">
            <p class="lead"><?php echo $lead_text ?></p>
          </div>
        <?php endif; ?>
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'max-w-none xl:prose-lg')); ?>
        <?php get_template_part('template-parts/components/buttons', '', array('field' => 'buttons', 'class' => 'mt-6 xl:mt-12')); ?>
      </div>
    </div>
  </div>
</section>