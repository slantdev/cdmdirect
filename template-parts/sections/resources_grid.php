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
$sub_headline = $section_intro['sub_headline'];
$headline = $section_intro['headline'];
$description = $section_intro['description'];
$show_search = $section_intro['show_search'];
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-xl relative">
      <div class="flex gap-x-12 items-end">
        <div class="w-2/3">
          <?php if ($sub_headline) : ?>
            <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium"><?php echo $sub_headline; ?></span></h4>
          <?php endif; ?>
          <?php if ($headline) : ?>
            <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-12 mb-6"><?php echo $headline; ?></h3>
          <?php endif; ?>
          <?php if ($description) : ?>
            <div class="prose">
              <p><?php echo $description; ?></p>
            </div>
          <?php endif; ?>
        </div>
        <div class="w-1/3 flex flex-col items-end">
          <?php if ($show_search) : ?>
            <div class="flex p-1 w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] rounded-full overflow-hidden">
              <input type="text" placeholder="Insert your query" class="input px-6 w-full bg-transparent focus:outline-0 focus:border-0 focus:ring-0">
              <button class="rounded-full px-10 bg-brand-bluedark font-bold text-white">Search</button>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="container max-w-screen-xl">
      <div class="px-12 lg:px-14 relative -mx-2 lg:-mx-0">
        <div id="resources-filter" class="swiper mt-10 px-2 pt-2 pb-4">
          <div class="swiper-wrapper filter-resources-buttons">
            <?php
            $taxonomies = get_terms(array(
              'taxonomy' => 'resources_category',
              'hide_empty' => false,
              'orderby' => 'term_order'
            ));
            if (!empty($taxonomies)) :
              $output = '<div class="swiper-slide w-auto"><button type="button" class="filter-resources filter-active inline-block rounded-full px-6 py-1.5 h-9 lg:h-auto text-sm lg:text-base lg:px-10 lg:py-2.5 text-brand-bluedark bg-[#F7F9FA] shadow-md hover:shadow-lg transition-all duration-200" data-id="all" data-postsperpage="' . $posts_per_page . '">All</button></div>';
              foreach ($taxonomies as $category) {
                $output .= '<div class="swiper-slide w-auto"><button type="button" class="filter-resources inline-block rounded-full px-6 py-1.5 h-9 lg:h-auto text-sm lg:text-base lg:px-10 lg:py-2.5 text-brand-bluedark bg-[#F7F9FA] shadow-md hover:shadow-lg transition-all duration-200" data-id="' . esc_attr($category->term_id) . '" data-postsperpage="' . $posts_per_page . '">' . esc_attr($category->name) . '</button></div>';
              }
              echo $output;
            endif;
            ?>
          </div>
        </div>
        <button type="button" class="resources-filter--button-prev absolute left-0 top-2 lg:top-[12px] w-9 h-9 lg:w-10 lg:h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-brand-blue text-gray-500 hover:text-white cursor-pointer transition-all duration-200">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.49994 1.00001C7.63154 0.999249 7.76201 1.02447 7.88384 1.07424C8.00568 1.124 8.1165 1.19733 8.20994 1.29001C8.30367 1.38297 8.37806 1.49357 8.42883 1.61543C8.4796 1.73729 8.50574 1.868 8.50574 2.00001C8.50574 2.13202 8.4796 2.26273 8.42883 2.38459C8.37806 2.50645 8.30367 2.61705 8.20994 2.71001L4.89994 6.00001L8.07994 9.31001C8.26619 9.49737 8.37073 9.75082 8.37073 10.015C8.37073 10.2792 8.26619 10.5326 8.07994 10.72C7.98698 10.8137 7.87637 10.8881 7.75452 10.9389C7.63266 10.9897 7.50195 11.0158 7.36994 11.0158C7.23793 11.0158 7.10722 10.9897 6.98536 10.9389C6.8635 10.8881 6.7529 10.8137 6.65994 10.72L2.79994 6.72001C2.61671 6.53308 2.51408 6.28176 2.51408 6.02001C2.51408 5.75826 2.61671 5.50694 2.79994 5.32001L6.79994 1.32001C6.8897 1.22308 6.99777 1.14489 7.11792 1.08997C7.23807 1.03504 7.36791 1.00447 7.49994 1.00001V1.00001Z" fill="currentColor" />
          </svg>
        </button>
        <button type="button" class="resources-filter--button-next absolute right-0 top-2 lg:top-[12px] w-9 h-9 lg:w-10 lg:h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-brand-blue text-gray-500 hover:text-white cursor-pointer transition-all duration-200">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.49994 11C4.36833 11.0008 4.23787 10.9755 4.11603 10.9258C3.9942 10.876 3.88338 10.8027 3.78994 10.71C3.69621 10.617 3.62182 10.5064 3.57105 10.3846C3.52028 10.2627 3.49414 10.132 3.49414 9.99999C3.49414 9.86798 3.52028 9.73727 3.57105 9.61541C3.62182 9.49355 3.69621 9.38295 3.78994 9.28999L7.09994 5.99999L3.91994 2.68999C3.73369 2.50263 3.62915 2.24918 3.62915 1.98499C3.62915 1.7208 3.73369 1.46735 3.91994 1.27999C4.0129 1.18626 4.1235 1.11187 4.24536 1.0611C4.36722 1.01033 4.49793 0.984192 4.62994 0.984192C4.76195 0.984192 4.89266 1.01033 5.01452 1.0611C5.13638 1.11187 5.24698 1.18626 5.33994 1.27999L9.19994 5.27999C9.38317 5.46692 9.4858 5.71824 9.4858 5.97999C9.4858 6.24174 9.38317 6.49306 9.19994 6.67999L5.19994 10.68C5.11018 10.7769 5.00211 10.8551 4.88196 10.91C4.76181 10.965 4.63197 10.9955 4.49994 11V11Z" fill="currentColor" />
          </svg>
        </button>
      </div>
      <script>
        const resources_filter = new Swiper('#resources-filter', {
          slidesPerView: 'auto',
          spaceBetween: 12,
          loop: false,
          watchOverflow: true,
          centerInsufficientSlides: true,
          navigation: {
            nextEl: '.resources-filter--button-next',
            prevEl: '.resources-filter--button-prev',
          },
          breakpoints: {
            768: {
              slidesPerView: 'auto',
              spaceBetween: 24
            },
            1280: {
              slidesPerView: 'auto',
              spaceBetween: 30
            }
          }
        });
      </script>
    </div>
    <?php
    $resources = get_sub_field('resources');
    $resources_category = $resources['resources_category'];
    $posts_per_page = $resources['posts_per_page'];
    if (!$posts_per_page) {
      $posts_per_page = -1;
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
      echo '<div class="container max-w-screen-xl">';
      echo '<div class="grid grid-cols-2 gap-16 mt-12">';
      while ($the_query->have_posts()) {
        $the_query->the_post();
        $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
        $img_src = get_the_post_thumbnail_url(get_the_ID(), 'large');
        $title =  get_the_title();
        $date =  get_the_date();
        $link = get_the_permalink();
        $terms = get_the_terms(get_the_ID(), 'resources_category');
        $term = $terms[0]->name;
    ?>
        <div>
          <div class="aspect-w-3 aspect-h-2">
            <a href="<?php echo $link ?>" class="h-full w-full">
              <img src='<?php echo $img_src ?>' alt='' class="object-cover h-full w-full rounded-lg" />
            </a>
          </div>
          <div class="mt-6">
            <div class="text-brand-blue mb-4"><?php echo $term ?></div>
            <h3 class="mb-4 font-bold text-[28px] text-slate-800"><?php echo $title ?></h3>
            <div class="mb-4"><?php echo $date ?></div>
            <div class="prose line-clamp-3">
              <?php echo $excerpt ?>
            </div>
            <div class="mt-8">
              <a href="<?php echo $link ?>" class="btn btn-primary"><span>Read More</span></a>
            </div>
          </div>
        </div>
    <?php
      }
      echo '</div>';
      echo '</div>';
    }
    wp_reset_postdata();
    ?>
  </div>
</section>