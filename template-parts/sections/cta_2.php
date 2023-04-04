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
$button = get_sub_field('button');

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative bg-brand-blue <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-xl text-white">
      <div class="flex gap-x-16">
        <div class="w-2/5">
          <?php if ($headline) : ?>
            <h2 class="text-[34px] font-bold"><?php echo $headline ?></h2>
          <?php endif; ?>
        </div>
        <div class="w-3/5">
          <div class="text-white">
            <?php if ($description) : ?>
              <div class="text-2xl mb-6"><?php echo $description ?></div>
            <?php endif; ?>
            <?php get_template_part('template-parts/components/buttons', '', array('field' => 'button', 'class' => '')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>