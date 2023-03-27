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

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative container max-w-screen-xl mx-auto <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-16 xl:gap-x-16 3xl:gap-x-24">
      <div class="w-full order-1 <?php echo $column_image_class ?>">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'headline', 'class' => 'leading-[1.3] font-bold text-brand-blue')); ?>
      </div>
      <div class="w-full order-2 <?php echo $column_text_class ?>">
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'max-w-none xl:prose-lg')); ?>
      </div>
    </div>

    <?php
    $image_center = get_sub_field('image_center');
    //preint_r($image_center);
    if ($image_center) :
    ?>
      <div class="mt-16">
        <div class="aspect-w-16 aspect-h-6">
          <img src='<?php echo $image_center['url'] ?>' alt='<?php echo $image_center['alt'] ?>' class="object-cover h-full w-full rounded-tl-[300px] rounded-tr-[300px] rounded-br-[120px] rounded-bl-[300px]" />
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>