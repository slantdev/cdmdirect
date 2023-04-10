<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

$section_intro = get_sub_field('section_intro');
$image = $section_intro['image'];
$headline = $section_intro['headline'];
$description = $section_intro['description'];
$industry_application = $section_intro['industry_application'];
$benefits_card = get_sub_field('benefits_card');
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="relative">
      <div class="container max-w-screen-xl">
        <div class="flex gap-x-16">
          <div class="w-2/5">
            <div class="absolute left-0 right-[60%] h-full">
              <?php if ($image) : ?>
                <img src='<?php echo $image['url'] ?>' alt='<?php echo $image['alt'] ?>' class="object-cover h-full w-full rounded-r-[300px]" />
              <?php else : ?>
                <div class="h-full w-full rounded-r-[300px] bg-slate-100"></div>
              <?php endif; ?>
            </div>
          </div>
          <div class="w-3/5 order-2">
            <?php if ($headline) : ?>
              <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6"><?php echo $headline; ?></h3>
            <?php endif; ?>
            <?php if ($description) : ?>
              <div class="text-lg mb-12 font-nunito">
                <?php echo $description; ?>
              </div>
            <?php endif; ?>
            <?php if ($industry_application) : ?>
              <div class="mt-12">
                <h4 class="uppercase text-brand-bluedark text-lg mb-4">Industry Application</h4>
                <div class="flex gap-6">
                  <?php foreach ($industry_application as $industry) : ?>
                    <a href="<?php echo get_term_link($industry) ?>" class="py-3 px-8 rounded-full shadow-md font-bold border border-slate-300 text-brand-bluedark bg-[#EDF1F5] hover:shadow-lg hover:bg-brand-blue hover:text-white hover:border-brand-blue transition duration-300"><?php echo $industry->name ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php if ($benefits_card) : ?>
      <div class="container max-w-screen-xl mt-24">
        <div class="grid grid-cols-2 gap-8">
          <?php foreach ($benefits_card as $num => $card) : ?>
            <div class="block bg-[#F7F9FA] rounded-lg p-10 border shadow-[0_0_20px_rgb(225,228,237,1)]">
              <div class="w-14 h-14 flex items-center justify-center rounded-full bg-brand-yellow font-bold text-white text-2xl"><?php echo $num + 1 ?></div>
              <?php if ($card['card_title']) : ?>
                <h5 class="text-slate-800 font-normal text-2xl mt-8 mb-6"><?php echo $card['card_title'] ?></h5>
              <?php endif; ?>
              <?php if ($card['card_description']) : ?>
                <div class="font-nunito text-lg">
                  <?php echo $card['card_description'] ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>