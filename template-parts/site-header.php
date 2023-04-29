<header class="site-header fixed w-full top-0 left-0 right-0 z-30">
  <div id="top-nav" class="bg-brand-blue text-white">
    <div class="top-nav--container max-w-screen-4xl mx-auto px-4 py-2 md:px-6 xl:px-8">
      <?php
      $links = get_field('links', 'option');
      $twitter = $links['twitter'];
      $facebook = $links['facebook'];
      $linkedin = $links['linkedin'];
      $youtube = $links['youtube'];
      $email = $links['email'];
      $phone = $links['phone'];
      if ($links) :
      ?>
        <div class="hidden lg:flex justify-end">
          <ul class="top-nav--ul flex gap-x-4">
            <?php if ($twitter) : ?>
              <li><a href="<?php echo $twitter['url'] ?>" target="<?php echo $twitter['target'] ?>"><?php echo cdmdirect_icon(array('icon' => 'twitter', 'group' => 'social', 'size' => '24', 'class' => '')); ?></a></li>
            <?php endif; ?>
            <?php if ($facebook) : ?>
              <li><a href="<?php echo $facebook['url'] ?>" target="<?php echo $facebook['target'] ?>"><?php echo cdmdirect_icon(array('icon' => 'facebook', 'group' => 'social', 'size' => '24', 'class' => '')); ?></a></li>
            <?php endif; ?>
            <?php if ($linkedin) : ?>
              <li><a href="<?php echo $linkedin['url'] ?>" target="<?php echo $linkedin['target'] ?>"><?php echo cdmdirect_icon(array('icon' => 'linkedin', 'group' => 'social', 'size' => '24', 'class' => '')); ?></a></li>
            <?php endif; ?>
            <?php if ($email) : ?>
              <li><a href="<?php echo $email['url'] ?>" target="<?php echo $email['target'] ?>"><?php echo cdmdirect_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => '24', 'class' => '')); ?></a></li>
            <?php endif; ?>
            <?php if ($phone) : ?>
              <li><a href="<?php echo $phone['url'] ?>" target="<?php echo $phone['target'] ?>"><?php echo cdmdirect_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => '24', 'class' => '')); ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div id="main-nav" class="py-4 xl:py-6 transition duration-300">
    <div class="max-w-screen-4xl mx-auto px-4 md:px-6 xl:px-8">
      <div class="flex justify-between items-center">
        <a id="logo" href="<?php echo get_site_url() ?>" class="inline-block relative z-50">
          <img src="<?php echo cdmdirect_asset('images/logo-cdm-direct-reverse.svg') ?>" alt="" class="h-24 lg:h-32 w-auto">
        </a>
        <div class="hidden xl:flex justify-end items-center gap-x-6 4xl:gap-x-12">
          <?php get_template_part('template-parts/components/megamenu'); ?>
          <div><button class="p-4 rounded-full bg-brand-yellow"><?php echo cdmdirect_icon(array('icon' => 'search', 'group' => 'utilities', 'size' => '24', 'class' => 'text-white')); ?></button></div>
        </div>
        <button type="button" id="mobilemenu-open" class="p-2 text-white xl:hidden">
          <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 6H21V8H3V6ZM3 11H21V13H3V11ZM3 16H21V18H3V16Z" fill="currentColor" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>