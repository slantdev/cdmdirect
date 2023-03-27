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
$button = get_sub_field('button');

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="absolute bottom-0 right-0 overflow-hidden z-0">
      <?php echo cdmdirect_svg(array('svg' => 'shape-2', 'group' => 'shape', 'width' => '980', 'height' => '821', 'class' => 'text-[#F7F9FA] translate-x-[320px] translate-y-[440px]')); ?>
    </div>
    <div class="container max-w-screen-xl relative">
      <div class="flex gap-x-16 items-center">
        <div class="w-2/3">
          <?php
          $solution_cards = get_sub_field('solution_cards_group')['info_cards'];
          if ($solution_cards) : ?>
            <div class="solution-cards grid grid-cols-2 gap-6">
              <?php foreach ($solution_cards as $card) : ?>
                <?php
                $icon_svg = $card['icon_svg'];
                $icon_color = $card['icon_color'];
                $icon_style = '';
                if ($icon_color) {
                  $icon_style = 'color: ' . $icon_color;
                }
                $title = $card['title'];
                $description = $card['description'];
                $link = $card['link'];
                ?>
                <?php if (isset($link['url'])) {
                  echo '<a href="' . $link['url'] . '" class="solution-card block bg-white rounded-lg p-8 shadow-[0_0_20px_rgb(225,228,237,1)]">';
                } else {
                  echo '<div class="solution-card block bg-white rounded-lg p-8 shadow-[0_0_20px_rgb(225,228,237,1)]">';
                } ?>

                <div class="card-content">
                  <?php if ($icon_svg) { ?>
                    <?php echo cdmdirect_icon(array('icon' => $icon_svg, 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
                  <?php } ?>

                  <?php if ($title) { ?>
                    <h5 class="card-title text-slate-800 font-bold text-[22px] mt-5 mb-4"><?php echo $title ?></h5>
                  <?php } ?>

                  <?php if ($description) { ?>
                    <div class="card-description line-clamp-2 font-nunito">
                      <?php echo $description ?>
                    </div>
                  <?php } ?>

                  <div class="card-readmore font-semibold">Read More +</div>
                </div>

                <?php if (isset($link['url'])) {
                  echo '</a>';
                } else {
                  echo '</div>';
                } ?>

              <?php endforeach; ?>

            </div>
          <?php endif; ?>
        </div>
        <div class="w-1/3">
          <?php if ($sub_headline) { ?>
            <?php get_template_part('template-parts/components/heading', '', array('field' => 'sub_headline', 'class' => 'font-medium text-slate-800', 'border' => $sub_headline_border)); ?>
          <?php } ?>
          <?php if ($headline) { ?>
            <div class="max-w-prose mx-auto mt-12">
              <?php get_template_part('template-parts/components/heading', '', array('field' => 'headline', 'class' => 'leading-tight font-bold text-brand-blue')); ?>
            </div>
          <?php } ?>
          <?php if ($description) { ?>
            <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'font-nunito text-lg')); ?>
          <?php } ?>
          <?php if ($button) { ?>
            <?php get_template_part('template-parts/components/buttons', '', array('field' => 'button', 'class' => '')); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>