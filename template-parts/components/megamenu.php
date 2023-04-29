<?php
?>
<div class="main-nav--div flex gap-x-6 items-center shadow-[0_1px_0px_rgba(255,255,255,0.5)] 2xl:gap-x-10 4xl:gap-x-14">
  <?php
  $menu_items = get_field('menu_items', 'option');
  //preint_r($menu_items);
  if ($menu_items) :
  ?>
    <ul class="main-nav--ul flex gap-x-5 2xl:gap-x-12 3xl:gap-x-14 4xl:gap-x-16">
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
                                $submenu_class = '';
                                $data_target = '';
                                $featured = $item['featured'];
                                if ($featured) {
                                  $submenu_class = 'menu-has-article';
                                  $data_target = 'article-' . $menu_id . $submenu_id;
                                }
                                ?>
                                <li>
                                  <a href="<?php echo $submenu_item['url'] ?>" class="<?php echo $submenu_class ?>" data-target="<?php echo $data_target ?>">
                                    <span><?php echo $submenu_item['title'] ?></span>
                                    <?php if ($featured) : ?>
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
                              $featured = $item['featured'];
                              $article_id = '';
                              if ($featured) {
                                $article_id = 'article-' . $menu_id . $submenu_id;
                              }
                              $title = $featured['title'];
                              $description = $featured['description'];
                              $thumbnail = $featured['image'];
                              ?>
                              <?php if ($featured) : ?>
                                <div id="<?php echo $article_id; ?>" class="menu-article" tabindex="-1">
                                  <div class="flex flex-col gap-y-4">
                                    <?php if ($thumbnail) : ?>
                                      <div class="aspect-w-16 aspect-h-8">
                                        <img src="<?php echo $thumbnail['url'] ?>" alt="<?php echo $title ?>" class="object-cover h-full w-full rounded-xl" />
                                      </div>
                                    <?php endif; ?>
                                    <?php if ($title) : ?>
                                      <h2 class="text-[28px] font-bold text-brand-blue line-clamp-2"><?php echo $title ?></h2>
                                    <?php endif; ?>
                                    <?php if ($description) : ?>
                                      <p class="text-lg line-clamp-2">
                                        <?php echo $description ?>
                                      </p>
                                    <?php endif; ?>
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
  <?php
  $links = get_field('links', 'option');
  $phone = $links['phone'];
  if ($phone) :
  ?>
    <a href="<?php echo $phone['url'] ?>" target="<?php echo $phone['target'] ?>" class="flex px-6 py-3 gap-x-4 text-white font-medium whitespace-nowrap border border-solid border-white rounded-full bg-transparent hover:bg-brand-orange hover:border-brand-orange transition duration-200">
      <?php echo cdmdirect_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => '24', 'class' => 'text-white')); ?>
      <span><?php echo $phone['title'] ?></span>
    </a>
  <?php endif; ?>
</div>