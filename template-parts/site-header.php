<header class="site-header fixed w-full top-0 left-0 right-0 z-30">
  <div id="top-nav" class="bg-brand-blue text-white">
    <div class="top-nav--container max-w-screen-4xl mx-auto px-4 py-2 md:px-6 xl:px-8">
      <div class="flex justify-end">
        <ul class="top-nav--ul flex gap-x-4">
          <li><a href="#"><?php echo cdmdirect_icon(array('icon' => 'twitter', 'group' => 'social', 'size' => '24', 'class' => '')); ?></a></li>
          <li><a href="#"><?php echo cdmdirect_icon(array('icon' => 'facebook', 'group' => 'social', 'size' => '24', 'class' => '')); ?></a></li>
          <li><a href="#"><?php echo cdmdirect_icon(array('icon' => 'linkedin', 'group' => 'social', 'size' => '24', 'class' => '')); ?></a></li>
          <li><a href="#"><?php echo cdmdirect_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => '24', 'class' => '')); ?></a></li>
          <li><a href="#"><?php echo cdmdirect_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => '24', 'class' => '')); ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="main-nav" class="py-2 md:py-3 xl:py-6 transition duration-300">
    <div class="max-w-screen-4xl mx-auto px-4 md:px-6 xl:px-8">
      <div class="flex justify-between items-center">
        <a id="logo" href="<?php echo get_site_url() ?>" class="inline-block relative z-50">
          <img src="<?php echo cdmdirect_asset('images/logo-cdm-direct-reverse.svg') ?>" alt="" class="h-32 w-auto">
        </a>
        <div class="flex justify-end items-center gap-x-6 4xl:gap-x-12">
          <div class="main-nav--div flex gap-x-10 items-center shadow-[0_1px_0px_rgba(255,255,255,0.5)] 4xl:gap-x-14">
            <?php
            $menu_items = get_field('menu_items', 'option');
            //preint_r($menu_items);
            if ($menu_items) :
            ?>
              <ul class="main-nav--ul flex gap-x-12 3xl:gap-x-14 4xl:gap-x-16">
                <?php foreach ($menu_items as $menu_id => $menu) : ?>
                  <?php
                  $menu_item = $menu['menu_item'];
                  $has_megamenu = $menu['has_megamenu'];
                  $megamenu_items = $menu['megamenu_items'];
                  $li_class = '';
                  if ($has_megamenu && $megamenu_items) {
                    $li_class = 'hoverable';
                  }
                  if ($menu_item) :
                  ?>
                    <li class="<?php echo $li_class ?>">
                      <a href="<?php echo $menu_item['url'] ?>" target="<?php echo $menu_item['target'] ?>" class="inline-block text-white font-medium uppercase whitespace-nowrap py-8 px-4 border-b-4 border-transparent hover:border-brand-orange transition duration-300"><?php echo $menu_item['title'] ?></a>
                      <?php if ($has_megamenu && $megamenu_items) : ?>
                        <div class="mega-menu" tabindex="0">
                          <div class="container max-w-screen-xl mx-auto">
                            <div class="flex gap-x-12 divide-x divide-white/30">
                              <?php
                              $menu_heading = $megamenu_items['menu_heading'];
                              $menu_description = $megamenu_items['menu_description'];
                              $submenu_items = $megamenu_items['submenu_items'];
                              ?>
                              <div class="w-1/4">
                                <?php if ($menu_heading) : ?>
                                  <h4 class="text-[34px] font-semibold text-brand-blue"><?php echo $menu_heading ?></h4>
                                <?php endif; ?>
                                <?php if ($menu_description) : ?>
                                  <div class="mt-6">
                                    <?php echo $menu_description ?>
                                  </div>
                                <?php endif; ?>
                              </div>
                              <div class="w-3/4 pl-12">
                                <div class="flex gap-x-12">
                                  <div class="w-2/5">
                                    <?php if ($submenu_items) : ?>
                                      <ul class="flex flex-col divide-y divide-white/30 text-lg">
                                        <?php foreach ($submenu_items as $submenu_id => $item) : ?>
                                          <?php
                                          $submenu_item = $item['submenu_item'];
                                          $featured_post = $item['featured_post'];
                                          $submenu_class = '';
                                          $data_target = '';
                                          if ($featured_post) {
                                            $submenu_class = 'menu-has-article';
                                            $data_target = 'article-' . $menu_id . $submenu_id;
                                          }
                                          ?>
                                          <li>
                                            <a href="<?php echo $submenu_item['url'] ?>" class="<?php echo $submenu_class ?>" data-target="<?php echo $data_target ?>">
                                              <span><?php echo $submenu_item['title'] ?></span>
                                              <?php if ($featured_post) : ?>
                                                <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '18', 'class' => 'text-brand-orange absolute right-0 top-4')); ?>
                                              <?php endif; ?>
                                            </a>
                                          </li>
                                        <?php endforeach; ?>
                                      </ul>
                                    <?php endif; ?>
                                  </div>
                                  <div class="w-3/5 relative">
                                    <?php if ($submenu_items) : ?>
                                      <?php foreach ($submenu_items as $submenu_id => $item) : ?>
                                        <?php
                                        $featured_post = $item['featured_post'];
                                        $article_id = '';
                                        if ($featured_post) {
                                          $article_id = 'article-' . $menu_id . $submenu_id;
                                        }
                                        $permalink = get_permalink($featured_post->ID);
                                        $title = get_the_title($featured_post->ID);
                                        $excerpt = get_the_excerpt($featured_post->ID);
                                        $thumbnail = get_the_post_thumbnail_url($featured_post->ID);
                                        ?>
                                        <?php if ($featured_post) : ?>
                                          <div id="<?php echo $article_id; ?>" class="menu-article" tabindex="-1">
                                            <div class="flex flex-col gap-y-4">
                                              <a href="<?php echo $permalink ?>" class="block">
                                                <div class="aspect-w-16 aspect-h-8">
                                                  <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="object-cover h-full w-full rounded-xl" />
                                                </div>
                                              </a>
                                              <h2 class="text-[28px] font-bold text-brand-blue line-clamp-2"><a href="<?php echo $permalink ?>" class="hover:underline"><?php echo $title ?></a></h2>
                                              <p class="text-lg line-clamp-2">
                                                <?php echo $excerpt ?>
                                              </p>
                                              <a href="<?php echo $permalink ?>" class="text-lg font-semibold text-brand-orange hover:underline">Learn More &raquo;</a>
                                            </div>
                                          </div>
                                        <?php endif; ?>
                                      <?php endforeach; ?>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <a href="#" class="flex px-6 py-3 gap-x-4 text-white font-medium border border-solid border-white rounded-full bg-transparent hover:bg-brand-orange hover:border-brand-orange transition duration-200">
              <?php echo cdmdirect_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => '24', 'class' => 'text-white')); ?>
              <span>1800 221 811</span>
            </a>
          </div>
          <div><button class="p-4 rounded-full bg-brand-yellow"><?php echo cdmdirect_icon(array('icon' => 'search', 'group' => 'utilities', 'size' => '24', 'class' => 'text-white')); ?></button></div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div id="mega-menu" class="transition duration-300 py-12 text-white min-h-[460px]" tabindex="0">
    <div class="container max-w-screen-xl mx-auto">
      <div class="flex gap-x-12 divide-x divide-white/30">
        <div class="w-1/4">
          <h4 class="text-[34px] font-semibold text-brand-blue">Services</h4>
          <div class="mt-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
        </div>
        <div class="w-3/4 pl-12">
          <div class="flex gap-x-12">
            <div class="w-2/5">
              <ul class="flex flex-col divide-y divide-white/30 text-lg">
                <li>
                  <a href="#" class="menu-has-article" data-target="article-0201">
                    <span>Outsourcing</span>
                    <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '18', 'class' => 'text-brand-orange absolute right-0 top-4')); ?>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-has-article" data-target="article-0202">
                    <span>Outsourcing</span>
                    <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '18', 'class' => 'text-brand-orange absolute right-0 top-4')); ?>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-has-article" data-target="article-0203">
                    <span>Outsourcing</span>
                    <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '18', 'class' => 'text-brand-orange absolute right-0 top-4')); ?>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-has-article" data-target="article-0204">
                    <span>Outsourcing</span>
                    <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '18', 'class' => 'text-brand-orange absolute right-0 top-4')); ?>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-has-article" data-target="article-0205">
                    <span>Outsourcing</span>
                    <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '18', 'class' => 'text-brand-orange absolute right-0 top-4')); ?>
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-has-article" data-target="article-0206">
                    <span>Outsourcing</span>
                    <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '18', 'class' => 'text-brand-orange absolute right-0 top-4')); ?>
                  </a>
                </li>
              </ul>
            </div>
            <div class="w-3/5 relative">
              <div id="article-0201" class="menu-article">
                <a href="#" class="block">
                  <div class="aspect-w-16 aspect-h-6">
                    <img src='https://source.unsplash.com/3WAMh1omVAY/1600x900' alt='' class="object-cover h-full w-full rounded-xl" />
                  </div>
                </a>
                <h2 class="text-[28px] font-bold text-brand-blue"><a href="#" class="hover:underline">Outsourcing solution for a Medical business</a></h2>
                <p class="text-lg line-clamp-2">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                </p>
                <a href="#" class="text-lg font-semibold text-brand-orange hover:underline">Learn More &raquo;</a>
              </div>
              <div id="article-0202" class="menu-article">
                <a href="#" class="block">
                  <div class="aspect-w-16 aspect-h-6">
                    <img src='https://source.unsplash.com/3WAMh1omVAY/1600x900' alt='' class="object-cover h-full w-full rounded-xl" />
                  </div>
                </a>
                <h2 class="text-[28px] font-bold text-brand-blue"><a href="#" class="hover:underline">2Outsourcing solution for a Medical business</a></h2>
                <p class="text-lg line-clamp-2">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                </p>
                <a href="#" class="text-lg font-semibold text-brand-orange hover:underline">Learn More &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</header>