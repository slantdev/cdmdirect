<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$sub_headline = get_sub_field('sub_headline');
$sub_headline_border = get_sub_field('sub_headline_border');
$sub_headline_border = array(
  'border_enable' => $sub_headline_border['add_border_bottom'],
  'border_color' => $sub_headline_border['border_color'],
  'border_size' => $sub_headline_border['border_size']
);

$headline = get_sub_field('headline');
$description = get_sub_field('description');

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-md text-center">
      <?php if ($sub_headline) { ?>
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'sub_headline', 'class' => 'font-medium', 'border' => $sub_headline_border)); ?>
      <?php } ?>
      <?php if ($headline) { ?>
        <div class="max-w-prose mx-auto mt-12">
          <?php get_template_part('template-parts/components/heading', '', array('field' => 'headline', 'class' => 'leading-tight font-bold text-brand-blue')); ?>
        </div>
      <?php } ?>
      <?php if ($description) { ?>
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'font-nunito text-lg')); ?>
      <?php } ?>
    </div>

    <?php
    $features = get_sub_field('features_grid')['features'];
    //preint_r($features);
    if ($features) : ?>
      <div class="container max-w-screen-xl mt-20">
        <div class="grid grid-cols-3 gap-20">
          <?php foreach ($features as $feature) : ?>
            <?php
            $icon_svg = $feature['icon_svg'];
            $icon_color = $feature['icon_color'];
            $title = $feature['title'];
            $description = $feature['description'];
            $icon_style = '';
            if ($icon_color) {
              $icon_style = 'color: ' . $icon_color;
            }
            ?>
            <div>
              <?php if ($icon_svg) : ?>
                <div class="mb-4" style="<?php echo $icon_style ?>">
                  <?php echo cdmdirect_icon(array('icon' => $icon_svg, 'group' => 'content', 'size' => '80')); ?>
                </div>
              <?php endif; ?>
              <?php if ($title) : ?>
                <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4"><?php echo $title ?></h4>
              <?php endif; ?>
              <?php if ($description) : ?>
                <div class="line-clamp-3 font-nunito"><?php echo $description ?></div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php
    $more_button = get_sub_field('more_button');
    //preint_r($more_button);
    if ($more_button) : ?>
      <div class="container max-w-screen-lg mt-20 text-center">
        <?php get_template_part('template-parts/components/buttons', '', array('field' => 'more_button', 'class' => '')); ?>
      </div>
    <?php endif; ?>
  </div>
</section>