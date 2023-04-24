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
$stats_cards = get_sub_field('stats_cards');
$background = get_sub_field('background');
$background_url = isset($background['background_image']['url']) ? $background['background_image']['url'] : '';
$background_overlay = isset($background['overlay_color']) ? $background['overlay_color'] : '';
$overlay_style = '';
if ($background_overlay) {
  $overlay_style = ' background-color: ' . $background_overlay . ';';
}

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative z-20">
    <?php if ($background_url) : ?>
      <div class="absolute inset-0">
        <div class="absolute inset-0 mix-blend-color-burn" style="<?php echo $overlay_style ?>"></div>
        <img src="<?php echo $background_url ?>" alt="" class="object-bottom object-cover h-full w-full opacity-100">
      </div>
    <?php endif; ?>
    <div class="container max-w-screen-xl relative pt-32 pb-0">
      <div class="flex">
        <div class="w-2/3">
          <?php if ($sub_headline) { ?>
            <?php get_template_part('template-parts/components/heading', '', array('field' => 'sub_headline', 'class' => 'font-medium text-white', 'border' => $sub_headline_border)); ?>
          <?php } ?>
          <?php if ($headline) { ?>
            <?php get_template_part('template-parts/components/heading', '', array('field' => 'headline', 'class' => 'leading-tight font-bold text-brand-bluedark')); ?>
          <?php } ?>
          <?php if ($description) { ?>
            <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'text-lg text-white')); ?>
          <?php } ?>
        </div>
        <div class="w-1/3">
          <?php echo cdmdirect_icon(array('icon' => 'play-button', 'group' => 'utilities', 'size' => '120', 'class' => 'text-brand-blue mx-auto mt-10')); ?>
        </div>
      </div>
    </div>
    <?php if ($stats_cards) : ?>
      <div class="container max-w-screen-xl relative translate-y-1/4">
        <div class="grid grid-cols-3 gap-x-12">
          <?php foreach ($stats_cards as $card) : ?>
            <div class="bg-white rounded-lg p-10 text-center shadow-[0_0_20px_rgb(225,228,237,1)]">
              <?php
              $number = isset($card['number']) ? $card['number'] : '';
              $title = isset($card['title']) ? $card['title'] : '';
              $description = isset($card['description']) ? $card['description'] : '';
              ?>
              <?php if ($number) : ?>
                <div class="font-light text-[48px] text-brand-blue"><?php echo $number ?></div>
                <div class="w-16 h-0.5 bg-brand-yellow mx-auto mt-3 mb-5"></div>
              <?php endif; ?>
              <?php if ($title) : ?>
                <h5 class="text-brand-bluedark font-bold text-xl leading-tight mb-4"><?php echo $title ?></h5>
                <?php if ($description) : ?>
                <?php endif; ?>
                <div class="font-nunito">
                  <?php echo $description ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>