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
  <div id="main-nav" class="max-w-screen-4xl mx-auto px-4 md:px-6 xl:px-8 py-2 md:py-3 xl:py-6 transition duration-300">
    <div class="flex justify-between items-center">
      <a id="logo" href="#" class="inline-block">
        <img src="<?php echo cdmdirect_asset('images/logo-cdm-direct-reverse.svg') ?>" alt="" class="h-32 w-auto">
      </a>
      <div class="flex justify-end items-center gap-x-6 4xl:gap-x-12">
        <div class="main-nav--div flex gap-x-10 items-center shadow-[0_1px_0px_rgba(255,255,255,0.5)] 4xl:gap-x-14">
          <ul class="main-nav--ul flex gap-x-12 text-white font-medium uppercase 3xl:gap-x-14 4xl:gap-x-16">
            <li><a href="<?php echo get_site_url() ?>/" class="inline-block whitespace-nowrap py-8 px-3 border-b-4 border-transparent hover:border-brand-orange transition duration-300">Home</a></li>
            <li><a href="<?php echo get_site_url() ?>/our-services" class="inline-block whitespace-nowrap py-8 px-3 border-b-4 border-transparent hover:border-brand-orange transition duration-300">Services</a></li>
            <li><a href="<?php echo get_site_url() ?>/industry" class="inline-block whitespace-nowrap py-8 px-3 border-b-4 border-transparent hover:border-brand-orange transition duration-300">Industry</a></li>
            <li><a href="<?php echo get_site_url() ?>/resources" class="inline-block whitespace-nowrap py-8 px-3 border-b-4 border-transparent hover:border-brand-orange transition duration-300">Resources</a></li>
            <li><a href="<?php echo get_site_url() ?>/about-us" class="inline-block whitespace-nowrap py-8 px-3 border-b-4 border-transparent hover:border-brand-orange transition duration-300">About</a></li>
            <li><a href="<?php echo get_site_url() ?>/contact-us" class="inline-block whitespace-nowrap py-8 px-3 border-b-4 border-transparent hover:border-brand-orange transition duration-300">Contact Us</a></li>
          </ul>
          <a href="#" class="flex px-6 py-3 gap-x-4 text-white font-medium border border-solid border-white rounded-full bg-transparent hover:bg-brand-orange hover:border-brand-orange transition duration-200">
            <?php echo cdmdirect_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => '24', 'class' => 'text-white')); ?>
            <span>1800 221 811</span>
          </a>
        </div>
        <div><button class="p-4 rounded-full bg-brand-yellow"><?php echo cdmdirect_icon(array('icon' => 'search', 'group' => 'utilities', 'size' => '24', 'class' => 'text-white')); ?></button></div>
      </div>
    </div>
  </div>
</header>