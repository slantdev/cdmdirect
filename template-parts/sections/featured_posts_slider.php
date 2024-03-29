<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

$featured_posts_slider = get_sub_field('featured_posts_slider');

if ($featured_posts_slider) : ?>

  <section class="relative z-20 pt-10 pb-12 lg:pb-24 lg:pt-0 overflow-hidden lg:-translate-y-12">
    <div class="container max-w-screen-xl relative">
      <div class="bg-brand-blue text-white rounded-[20px] p-6 md:p-8 lg:p-10 xl:p-14 shadow-2xl">
        <div class="flex flex-col lg:flex-row lg:gap-x-12 xl:gap-x-14 items-center">
          <div class="w-full lg:w-1/6 flex items-center">
            <div class="font-bold text-lg lg:pb-4 lg:border-b-2 lg:border-white pt-2 lg:pt-0">FEATURED</div>
          </div>
          <div id="featured-posts-slider" class="w-full lg:w-5/6">
            <div class="border-b border-white mb-8 relative flex justify-end -mt-5 lg:-mt-6">
              <div class="absolute left-0 -bottom-px h-2 w-20 bg-brand-yellow"></div>
              <div class="flex gap-x-1">
                <button class="swiper-prev inline-block bg-black text-brand-yellow p-2 bg-opacity-50 hover:bg-opacity-100">
                  <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'rotate-180')); ?>
                </button>
                <button class="swiper-next inline-block bg-black text-brand-yellow p-2 bg-opacity-50 hover:bg-opacity-100">
                  <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-yellow')); ?>
                </button>
              </div>
            </div>
            <div class="swiper featured-posts-slider">
              <div class="swiper-wrapper">
                <?php foreach ($featured_posts_slider as $post) : ?>
                  <?php
                  $post_title = $post['post']->post_title;
                  $excerpt = $post['excerpt'];
                  $permalink = get_the_permalink($post['post']->ID);
                  ?>
                  <div class="swiper-slide">
                    <div class="flex flex-col gap-4 lg:flex-row lg:gap-6">
                      <div class="w-full lg:w-2/3">
                        <h3 class="font-bold text-3xl md:text-[34px] leading-tight"><a href="<?php echo $permalink ?>" class="hover:underline"><?php echo $post_title ?></a></h3>
                      </div>
                      <div class="w-full lg:w-1/3">
                        <?php if ($excerpt) : ?>
                          <div class="text-lg font-nunito">
                            <?php echo $excerpt ?>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <script>
              const featuredPosts = new Swiper('.featured-posts-slider', {
                loop: true,
                navigation: {
                  nextEl: '#featured-posts-slider .swiper-next',
                  prevEl: '#featured-posts-slider .swiper-prev',
                },
              });
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="absolute top-12 left-0 overflow-hidden -z-10">
      <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '600', 'height' => '434', 'class' => 'text-[#F7F9FA] rotate-[30deg] -translate-y-[200px] -translate-x-[140px]')); ?>
    </div>
  </section>

<?php endif; ?>