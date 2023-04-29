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
$view_all_link = get_sub_field('view_all_link');

?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>" class="overflow-hidden">
  <div class="relative z-10 <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-xl relative">
      <div class="flex flex-col gap-4 md:flex-row md:gap-x-10 lg:gap-x-12">
        <div class="w-full md:w-1/2">
          <?php if ($sub_headline) { ?>
            <?php get_template_part('template-parts/components/heading', '', array('field' => 'sub_headline', 'class' => 'font-medium text-slate-800', 'border' => $sub_headline_border)); ?>
          <?php } ?>
          <?php if ($headline) { ?>
            <?php get_template_part('template-parts/components/heading', '', array('field' => 'headline', 'class' => 'leading-tight font-bold text-brand-bluedark mt-6 mb-6')); ?>
          <?php } ?>
        </div>
        <div class="w-full md:w-1/2 flex flex-col md:items-end -mt-8 md:-mt-0">
          <?php if ($view_all_link) { ?>
            <a href="<?php echo $view_all_link['url'] ?>" class="text-brand-blue text-sm lg:text-lg font-bold hover:underline">View All</a>
          <?php } ?>
          <!-- <select name="" id="" class="mt-6 rounded-full bg-white pl-8 pr-12 py-4 font-bold text-slate-800 border-none min-w-[280px] shadow-inner">
            <option value="">Featured</option>
            <option value="">Option 1</option>
            <option value="">Option 2</option>
            <option value="">Option 3</option>
          </select> -->
        </div>
      </div>
    </div>

    <?php
    $case_studies = get_sub_field('case_studies');
    $case_studies_posts = $case_studies['case_studies_posts'];
    if ($case_studies_posts) :
    ?>
      <div class="container max-w-screen-xl pt-12 lg:pt-16 relative">
        <div class="flex flex-col gap-y-12">
          <?php foreach ($case_studies_posts as $key => $post) :
            $permalink = get_permalink($post->ID);
            $title = get_the_title($post->ID);
            $excerpt = get_the_excerpt($post->ID);
            $thumbnail = get_the_post_thumbnail_url($post->ID, 'full');
          ?>
            <?php if ($key & 1) { ?>
              <div class="flex flex-col lg:flex-row lg:gap-x-8 xl:gap-x-12 items-center">
                <div class="w-full lg:w-1/3 order-2 lg:order-2">
                  <h3 class="text-3xl lg:text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6"><?php echo $title ?></h3>
                  <div class="text-lg mb-6 lg:mb-12 font-nunito line-clamp-3">
                    <?php echo $excerpt; ?>
                  </div>
                  <a href="<?php echo $permalink ?>" class="btn btn-primary"><span>Read more</span></a>
                </div>
                <div class="w-full order-1 lg:w-2/3 lg:pr-10 xl:pr-24 lg:order-1">
                  <div class="aspect-w-8 aspect-h-5 lg:aspect-h-6">
                    <img src='<?php echo $thumbnail ?>' alt='' class="object-cover h-full w-full rounded-tl-[300px] rounded-tr-[300px] rounded-bl-[50px] rounded-br-[300px]" />
                  </div>
                </div>
              </div>
            <?php } else { ?>
              <div class="flex flex-col lg:flex-row lg:gap-x-8 xl:gap-x-12 lg:items-center">
                <div class="w-full lg:w-1/3 order-2 lg:order-1">
                  <h3 class="text-3xl lg:text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6"><?php echo $title ?></h3>
                  <div class="text-lg mb-6 lg:mb-12 font-nunito line-clamp-3">
                    <?php echo $excerpt; ?>
                  </div>
                  <a href="<?php echo $permalink ?>" class="btn btn-primary"><span>Read more</span></a>
                </div>
                <div class="w-full lg:w-2/3 lg:pl-10 xl:pl-24 order-1 lg:order-2">
                  <?php if ($thumbnail) : ?>
                    <div class="aspect-w-8 aspect-h-5 lg:aspect-h-6">
                      <img src='<?php echo $thumbnail ?>' alt='' class="object-cover h-full w-full rounded-tl-[300px] rounded-tr-[300px] rounded-br-[50px] rounded-bl-[300px]" />
                    </div>
                  <?php else : ?>
                    <div class="aspect-w-8 aspect-h-5 lg:aspect-h-6 bg-slate-100 rounded-tl-[300px] rounded-tr-[300px] rounded-br-[50px] rounded-bl-[300px]">
                      <div class="h-full w-full"></div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php } ?>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="absolute top-0 left-0 -z-10">
      <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '1080', 'height' => '635', 'class' => 'text-[#ffffff] rotate-[5deg] translate-y-[50px] -translate-x-[450px]')); ?>
    </div>
    <div class="absolute bottom-12 right-0 overflow-hidden -z-10">
      <?php echo cdmdirect_svg(array('svg' => 'shape-3', 'group' => 'shape', 'width' => '318', 'height' => '353', 'class' => 'text-[#ffffff] translate-x-[100px] translate-y-[0px]')); ?>
    </div>
  </div>
</section>