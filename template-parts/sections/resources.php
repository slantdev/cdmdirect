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
$sub_headline = $section_intro['sub_headline'];
$headline = $section_intro['headline'];
$description = $section_intro['description'];
$view_all_link = $section_intro['view_all_link'];
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="relative">
      <div class="container max-w-screen-xl">
        <div class="flex">
          <div class="w-2/3">
            <div class="absolute right-[40%] pr-10 left-0 h-full">
              <?php if ($image) : ?>
                <img src='<?php echo $image['url'] ?>' alt='<?php echo $image['alt'] ?>' class="object-cover h-full w-full rounded-r-[300px]" />
              <?php else : ?>
                <div class="h-full w-full rounded-r-[300px] bg-slate-100"></div>
              <?php endif; ?>
            </div>
          </div>
          <div class="w-1/3 order-2">
            <?php if ($sub_headline) : ?>
              <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium"><?php echo $sub_headline; ?></span></h4>
            <?php endif; ?>
            <?php if ($headline) : ?>
              <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6"><?php echo $headline; ?></h3>
            <?php endif; ?>
            <?php if ($description) : ?>
              <div class="text-lg mb-12 font-nunito">
                <?php echo $description; ?>
              </div>
            <?php endif; ?>
            <?php if ($view_all_link) : ?>
              <a href="<?php echo $view_all_link['url']; ?>" class="btn btn-primary"><span><?php echo $view_all_link['title']; ?></span></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container max-w-screen-xl mt-24">
      <?php
      $resources = get_sub_field('resources');
      $resources_category = $resources['resources_category'];
      $posts_per_page = $resources['posts_per_page'];
      if (!$posts_per_page) {
        $posts_per_page = 3;
      }
      if ($resources_category) {
        $args = array(
          'post_type' => 'resources',
          'posts_per_page' => $posts_per_page,
          'tax_query' => array(
            array(
              'taxonomy' => 'resources_category',
              'field'    => 'term_id',
              'terms'    => $resources_category,
            ),
          ),
        );
      } else {
        $args = array(
          'post_type' => 'resources',
          'posts_per_page' => $posts_per_page,
        );
      }
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) {
        echo '<div class="grid grid-cols-3 gap-x-6">';
        while ($the_query->have_posts()) {
          $the_query->the_post();
          $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
          $img_src = get_the_post_thumbnail_url(get_the_ID(), 'large');
          $title =  get_the_title();
          $link = get_the_permalink();
          echo '<a href="' . $link . '" class="flex flex-col bg-white rounded-lg shadow-[0_3px_6px_rgb(0,0,0,.16)] overflow-hidden relative">';
          echo '<div class="aspect-w-16 aspect-h-8">
              <img src="' . $img_src . '" alt="' . $title . '" class="object-cover h-full w-full" />
            </div>';
          echo '<div class="p-8 pb-16 relative">
              <h4 class="line-clamp-2 font-bold text-lg leading-tight text-slate-800 mb-4">' . $title . '</h4>
              <div class="line-clamp-2 font-nunito">' . $excerpt . '</div>
              <div class="absolute right-6 bottom-6">' . cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-blue')) . '</div>
            </div>';
          echo '</a>';
        }
        echo '</div>';
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>