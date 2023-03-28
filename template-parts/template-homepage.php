<?php

/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 */
get_header();
?>

<!-- Hero -->
<section class="bg-black relative h-screen">
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-[#4A4A4A] mix-blend-multiply opacity-70"></div>
    <img src="<?php echo cdmdirect_asset('images/banner/hero-banner-01.jpg') ?>" alt="" class="object-cover h-full w-full opacity-100">
  </div>
  <div class="container max-w-screen-xl relative z-10 pt-[216px] pb-10 h-full">
    <div class="flex h-full items-center text-white">
      <div class="max-w-[880px]">
        <h2 class="font-bold text-[28px]">Welcome to CDM Direct</h2>
        <div class="w-[70px] border-b-[3px] border-solid border-brand-orange my-6"></div>
        <h1 class="font-light text-[54px] leading-tight">Australia’s ONLY Customer Care & Insights Company</h1>
        <div class="mt-6">
          <p class="text-lg font-medium">We’re more like a knowledge warehouse; you’ll find every conceivable customer care solution your business needs to grow bigger, faster, stronger – all under one roof. </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="relative z-20">
  <div class="container max-w-screen-xl -mt-12 relative">
    <div class="bg-brand-blue text-white rounded-[20px] px-14 py-14">
      <div class="flex gap-x-14 items-center">
        <div class="flex-none flex items-center">
          <div class="font-bold text-lg pb-4 border-b-2 border-white">FEATURED</div>
        </div>
        <div>
          <div class="border-b border-white mb-8 relative flex justify-end -mt-6">
            <div class="absolute left-0 -bottom-px h-2 w-20 bg-brand-yellow"></div>
            <div class="flex gap-x-1">
              <button class="inline-block bg-black text-brand-yellow p-2 bg-opacity-50 hover:bg-opacity-100">
                <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'rotate-180')); ?>
              </button>
              <button class="inline-block bg-black text-brand-yellow p-2 bg-opacity-50 hover:bg-opacity-100">
                <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-yellow')); ?>
              </button>
            </div>
          </div>
          <div class="flex gap-x-6">
            <div class="w-2/3">
              <h3 class="font-bold text-[34px] leading-tight">5 Reasons Why Your Business Needs To Consider Co-Sourcing</h3>
            </div>
            <div class="w-1/3">
              <div class="text-lg font-nunito">
                Download our free PDF to discover the benefits of co-sourcing your customer contact centre.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl py-32 relative">
    <div class="flex gap-x-16 items-center">
      <div class="w-2/3">
        <div class="solution-cards grid grid-cols-2 gap-6">
          <a href="#" class="solution-card block bg-white rounded-lg p-8 shadow-[0_0_20px_rgb(225,228,237,1)]">
            <div class="card-content">
              <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
              <h5 class="card-title text-slate-800 font-bold text-[22px] mt-5 mb-4">Customer Service</h5>
              <div class="card-description line-clamp-2 font-nunito">
                Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
              </div>
              <div class="card-readmore font-semibold">Read More +</div>
            </div>
          </a>
          <a href="#" class="solution-card block bg-white rounded-lg p-8 shadow-[0_0_20px_rgb(225,228,237,1)]">
            <div class="card-content">
              <?php echo cdmdirect_icon(array('icon' => 'calendar', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
              <h5 class="card-title text-slate-800 font-bold text-[22px] mt-5 mb-4">Overflow</h5>
              <div class="card-description line-clamp-2 font-nunito">
                Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
              </div>
              <div class="card-readmore font-semibold">Read More +</div>
            </div>
          </a>
          <a href="#" class="solution-card block bg-white rounded-lg p-8 shadow-[0_0_20px_rgb(225,228,237,1)]">
            <div class="card-content">
              <?php echo cdmdirect_icon(array('icon' => 'security', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
              <h5 class="card-title text-slate-800 font-bold text-[22px] mt-5 mb-4">Collections</h5>
              <div class="card-description line-clamp-2 font-nunito">
                Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
              </div>
              <div class="card-readmore font-semibold">Read More +</div>
            </div>
          </a>
          <a href="#" class="solution-card block bg-white rounded-lg p-8 shadow-[0_0_20px_rgb(225,228,237,1)]">
            <div class="card-content">
              <?php echo cdmdirect_icon(array('icon' => 'product-recall', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
              <h5 class="card-title text-slate-800 font-bold text-[22px] mt-5 mb-4">Product Recall</h5>
              <div class="card-description line-clamp-2 font-nunito">
                Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
              </div>
              <div class="card-readmore font-semibold">Read More +</div>
            </div>
          </a>
        </div>
      </div>
      <div class="w-1/3">
        <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium">How we can help you?</span></h4>
        <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">Get a solutions that gets you results</h3>
        <p class="text-lg font-nunito">
          Our consultants help address your most challenging issues by providing strategic, financial, operational, and IT services.
        </p>
        <a href="#" class="btn btn-primary mt-6"><span>View all services</span></a>
      </div>
    </div>
  </div>
  <div class="absolute top-12 left-0 overflow-hidden -z-10">
    <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '600', 'height' => '434', 'class' => 'text-[#F7F9FA] rotate-[30deg] -translate-y-[200px] -translate-x-[140px]')); ?>
  </div>
  <div class="absolute bottom-0 right-0 overflow-hidden -z-10">
    <?php echo cdmdirect_svg(array('svg' => 'shape-2', 'group' => 'shape', 'width' => '980', 'height' => '821', 'class' => 'text-[#F7F9FA] translate-x-[320px] translate-y-[440px]')); ?>
  </div>
</section>

<!-- Stats -->
<section class="relative z-20">
  <div class="absolute inset-0">
    <div class="absolute inset-0 bg-[#BFF3FF] mix-blend-color-burn opacity-50"></div>
    <img src="<?php echo cdmdirect_asset('images/banner/hero-banner-02.jpg') ?>" alt="" class="object-bottom object-cover h-full w-full opacity-100">
  </div>
  <div class="container max-w-screen-xl relative pt-32 pb-0">
    <div class="flex">
      <div class="w-2/3">
        <h4><span class="inline-block pb-3 border-b-2 border-white text-lg text-white font-medium">Who we are</span></h4>
        <h3 class="text-[34px] leading-tight font-bold text-brand-bluedark mt-6 mb-6">CDM Direct is a well established global operation</h3>
        <p class="text-lg text-white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="w-1/3">
        <?php echo cdmdirect_icon(array('icon' => 'play-button', 'group' => 'utilities', 'size' => '120', 'class' => 'text-brand-blue mx-auto mt-10')); ?>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl relative translate-y-1/4">
    <div class="grid grid-cols-3 gap-x-12">
      <div class="bg-white rounded-lg p-10 text-center shadow-[0_0_20px_rgb(225,228,237,1)]">
        <div class="font-light text-[48px] text-brand-blue">500+</div>
        <div class="w-16 h-0.5 bg-brand-yellow mx-auto mt-3 mb-5"></div>
        <h5 class="text-brand-bluedark font-bold text-xl leading-tight mb-4">Experienced Employees</h5>
        <p class="line-clamp-3 font-nunito">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="bg-white rounded-lg p-10 text-center shadow-[0_0_20px_rgb(225,228,237,1)]">
        <div class="font-light text-[48px] text-brand-blue">3</div>
        <div class="w-16 h-0.5 bg-brand-yellow mx-auto mt-3 mb-5"></div>
        <h5 class="text-brand-bluedark font-bold text-xl leading-tight mb-4">APAC Locations</h5>
        <p class="line-clamp-3 font-nunito">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="bg-white rounded-lg p-10 text-center shadow-[0_0_20px_rgb(225,228,237,1)]">
        <div class="font-light text-[48px] text-brand-blue">30+</div>
        <div class="w-16 h-0.5 bg-brand-yellow mx-auto mt-3 mb-5"></div>
        <h5 class="text-brand-bluedark font-bold text-xl leading-tight mb-4">Years Experience</h5>
        <p class="line-clamp-3 font-nunito">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Case Studies -->
<section class="pt-56 pb-32 bg-brand-graylight relative z-10">
  <div class="container max-w-screen-xl relative">
    <div class="flex gap-x-12">
      <div class="w-1/2">
        <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium">Results we have delivered</span></h4>
        <h3 class="text-[34px] leading-tight font-bold text-brand-bluedark mt-6 mb-6">Our Case Studies</h3>
      </div>
      <div class="w-1/2 flex flex-col items-end">
        <a href="#" class="text-brand-blue text-lg font-bold hover:underline">View All</a>
        <select name="" id="" class="mt-6 rounded-full bg-white pl-8 pr-12 py-4 font-bold text-slate-800 border-none min-w-[280px] shadow-inner">
          <option value="">Featured</option>
          <option value="">Option 1</option>
          <option value="">Option 2</option>
          <option value="">Option 3</option>
        </select>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl pt-16 relative">
    <div class="flex gap-x-12 items-center">
      <div class="w-1/3">
        <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">Customer service for an automotive giant</h3>
        <p class="text-lg mb-12 font-nunito">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
        </p>
        <a href="#" class="btn btn-primary"><span>Read more</span></a>
      </div>
      <div class="w-2/3 pl-24">
        <div class="aspect-w-8 aspect-h-6">
          <img src='https://source.unsplash.com/3WAMh1omVAY/1600x900' alt='' class="object-cover h-full w-full rounded-tl-[300px] rounded-tr-[300px] rounded-br-[50px] rounded-bl-[300px]" />
        </div>
      </div>
    </div>
    <div class="flex gap-x-12 items-center mt-8">
      <div class="w-1/3 order-2">
        <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">Managing Overflow for a Healthcare business</h3>
        <p class="text-lg mb-12 font-nunito">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
        </p>
        <a href="#" class="btn btn-primary"><span>Read more</span></a>
      </div>
      <div class="w-2/3 pr-24 order-1">
        <div class="aspect-w-8 aspect-h-6">
          <img src='https://source.unsplash.com/MFSEP2g4YS0/1600x900' alt='' class="object-cover h-full w-full rounded-tl-[300px] rounded-tr-[300px] rounded-bl-[50px] rounded-br-[300px]" />
        </div>
      </div>
    </div>
  </div>
  <div class="absolute top-0 left-0 -z-10">
    <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '1080', 'height' => '635', 'class' => 'text-[#ffffff] rotate-[5deg] translate-y-[50px] -translate-x-[450px]')); ?>
  </div>
  <div class="absolute bottom-12 right-0 overflow-hidden -z-10">
    <?php echo cdmdirect_svg(array('svg' => 'shape-3', 'group' => 'shape', 'width' => '318', 'height' => '353', 'class' => 'text-[#ffffff] translate-x-[100px] translate-y-[0px]')); ?>
  </div>
</section>

<!-- Clients -->
<section class="bg-[#F7F9FA] py-32">
  <div class="container max-w-screen-xl">
    <h3 class="text-[34px] leading-tight font-bold text-brand-bluedark mt-6 mb-10 text-center">Meet some of our clients</h3>
  </div>
  <?php
  $carousel_id = uniqid('carousel-');
  $carousel_loop = 'true';
  $carousel_autoplay_setting = '
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  }
  ';
  ?>
  <div id="<?php echo $carousel_id ?>" class="swiper overflow-visible px-8">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="#" class="bg-white shadow-lg rounded-lg pt-8 pb-8 px-8 flex flex-col items-center justify-center">
          <img src="<?php echo cdmdirect_asset('images/clients/origin.png') ?>" alt="" class="">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#" class="bg-white shadow-lg rounded-lg pt-8 pb-8 px-8 flex flex-col items-center justify-center">
          <img src="<?php echo cdmdirect_asset('images/clients/vicsuper.png') ?>" alt="" class="">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#" class="bg-white shadow-lg rounded-lg pt-8 pb-8 px-8 flex flex-col items-center justify-center">
          <img src="<?php echo cdmdirect_asset('images/clients/anz.png') ?>" alt="" class="">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#" class="bg-white shadow-lg rounded-lg pt-8 pb-8 px-8 flex flex-col items-center justify-center">
          <img src="<?php echo cdmdirect_asset('images/clients/commonwealth.png') ?>" alt="" class="">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#" class="bg-white shadow-lg rounded-lg pt-8 pb-8 px-8 flex flex-col items-center justify-center">
          <img src="<?php echo cdmdirect_asset('images/clients/allianz.png') ?>" alt="" class="">
        </a>
      </div>
    </div>
    <div class="flex items-center justify-center gap-x-4 mt-8">
      <button type="button" class="<?php echo $carousel_id ?>--button-prev button-prev w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-brand-blue text-gray-500 hover:text-white transition-all duration-200">
        <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '16', 'class' => 'rotate-180')); ?>
      </button>
      <button type="button" class="<?php echo $carousel_id ?>--button-next button-next w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-brand-blue text-gray-500 hover:text-white transition-all duration-200">
        <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '16', 'class' => '')); ?>
      </button>
    </div>
  </div>
  <?php
  echo '<script>';
  echo 'new Swiper("#' . $carousel_id . '", {';
  echo '
      slidesPerView: "1",
      spaceBetween: 16,
      watchOverflow: true,
      centerInsufficientSlides: true,
      breakpoints: {
        768: {
          slidesPerView: "3",
          spaceBetween: 32
        },
        1280: {
          slidesPerView: "4",
          spaceBetween: 40
        }
      },
      ';
  echo 'navigation: {
      nextEl: ".' . $carousel_id . '--button-next",
      prevEl: ".' . $carousel_id . '--button-prev",
    },';
  echo 'loop: ' . $carousel_loop . ',';
  echo $carousel_autoplay_setting;
  echo '});';
  echo '</script>';
  ?>
</section>

<!-- Why Clients Choose Us -->
<section class="bg-white py-32">
  <div class="container max-w-screen-md text-center">
    <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium">Why Clients Choose Us</span></h4>
    <div class="max-w-prose mx-auto mt-12">
      <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">Australia’s only Customer Care & Insight Company</h3>
    </div>
    <p class="font-nunito text-lg">We’re more like a knowledge warehouse; you’ll find every conceivable customer care solution your business needs to grow bigger, faster, stronger – all under one roof. But 30 years serving at the frontlines of customer service has taught us that it’s not until you convert that knowledge into wisdom and insight that the magic really happens.</p>
  </div>
  <div class="container max-w-screen-xl mt-20">
    <div class="grid grid-cols-3 gap-20">
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'flexible', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Flexible, Scalable & Cost Effective</h4>
        <p class="line-clamp-3 font-nunito">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'security', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Full Capability Tech & Security</h4>
        <p class="line-clamp-3 font-nunito">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'agent', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Experienced Customer Care Agents</h4>
        <p class="line-clamp-3 font-nunito">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'chat', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Reporting & Analytics</h4>
        <p class="line-clamp-3 font-nunito">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'peak', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Robust Research & Real Insights</h4>
        <p class="line-clamp-3 font-nunito">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'click', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Seamless Channel Integration</h4>
        <p class="line-clamp-3 font-nunito">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
      </div>
    </div>
    <div class="text-center mt-20">
      <a href="#" class="btn btn-primary"><span>Learn More</span></a>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-brand-blue py-32 relative z-10">
  <div class="container max-w-screen-md text-center text-white relative">
    <div>
      <h3 class="text-[34px] leading-tight font-bold text-white mt-6 mb-6">What our clients say about us</h3>
      <p class="font-nunito text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="flex flex-col items-center mt-10">
      <img class="rounded-full max-w-[148px]" src="<?php echo cdmdirect_asset('images/testimonials/mercedes-benz.jpg') ?>" alt="">
      <h5 class="text-xl font-bold mt-6 mb-2">Kevin Drives</h5>
      <p class="font-nunito">Marketing expert - ReeDip</p>
    </div>
  </div>
  <div class="absolute top-0 right-0 -z-10 opacity-[65%] overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '652', 'height' => '384', 'class' => 'text-[#47A0FA] scale-x-[-1] rotate-[0deg] -translate-y-[150px] translate-x-[100px]')); ?>
  </div>
  <div class="absolute bottom-0 left-20 -z-10 opacity-[65%] overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-1', 'group' => 'shape', 'width' => '276', 'height' => '162', 'class' => 'text-[#47A0FA] scale-x-[-1] rotate-[0deg] translate-y-[80px] translate-x-[0px]')); ?>
  </div>
</section>

<!-- Resources -->
<section class="py-32">
  <div class="relative">
    <div class="container max-w-screen-xl">
      <div class="flex">
        <div class="w-2/3">
          <div class="absolute right-[40%] pr-10 left-0 h-full">
            <img src='https://source.unsplash.com/MFSEP2g4YS0/1600x900' alt='' class="object-cover h-full w-full rounded-r-[300px]" />
          </div>
        </div>
        <div class="w-1/3 order-2">
          <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium">Resources</span></h4>
          <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">Insight driven innovation</h3>
          <p class="text-lg mb-12 font-nunito">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
          </p>
          <a href="#" class="btn btn-primary"><span>View All</span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl mt-24">
    <div class="grid grid-cols-3 gap-x-6">
      <a href="#" class="flex flex-col bg-white rounded-lg shadow-[0_3px_6px_rgb(0,0,0,.16)] overflow-hidden relative">
        <div class="aspect-w-16 aspect-h-8">
          <img src='https://source.unsplash.com/MFSEP2g4YS0/1600x900' alt='' class="object-cover h-full w-full" />
        </div>
        <div class="p-8 pb-16 relative">
          <h4 class="line-clamp-2 font-bold text-lg leading-tight text-slate-800 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h4>
          <p class="line-clamp-2 font-nunito">Lorem ipsum dolor sit amet, ipsum labitur lucilius mel id, ad has appareat.</p>
          <div class="absolute right-6 bottom-6">
            <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-blue')); ?>
          </div>
        </div>
      </a>
      <a href="#" class="flex flex-col bg-white rounded-lg shadow-[0_3px_6px_rgb(0,0,0,.16)] overflow-hidden relative">
        <div class="aspect-w-16 aspect-h-8">
          <img src='https://source.unsplash.com/MFSEP2g4YS0/1600x900' alt='' class="object-cover h-full w-full" />
        </div>
        <div class="p-8 pb-16 relative">
          <h4 class="line-clamp-2 font-bold text-lg leading-tight text-slate-800 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h4>
          <p class="line-clamp-2 font-nunito">Lorem ipsum dolor sit amet, ipsum labitur lucilius mel id, ad has appareat.</p>
          <div class="absolute right-6 bottom-6">
            <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-blue')); ?>
          </div>
        </div>
      </a>
      <a href="#" class="flex flex-col bg-white rounded-lg shadow-[0_3px_6px_rgb(0,0,0,.16)] overflow-hidden relative">
        <div class="aspect-w-16 aspect-h-8">
          <img src='https://source.unsplash.com/MFSEP2g4YS0/1600x900' alt='' class="object-cover h-full w-full" />
        </div>
        <div class="p-8 pb-16 relative">
          <h4 class="line-clamp-2 font-bold text-lg leading-tight text-slate-800 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h4>
          <p class="line-clamp-2 font-nunito">Lorem ipsum dolor sit amet, ipsum labitur lucilius mel id, ad has appareat.</p>
          <div class="absolute right-6 bottom-6">
            <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-blue')); ?>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="pt-20 pb-16 bg-[#E4EDF2] relative z-10">
  <div class="container max-w-screen-xl">
    <div class="flex justify-between items-center">
      <div class="font-semibold text-[22px] text-[#554D89]">Build your <span class="text-brand-orange">successful business</span> with us. Want to know how to do this?</div>
      <div><a href="#" class="btn btn-orange">Contact Us</a></div>
    </div>
  </div>
  <div class="absolute top-0 right-20 -z-10 overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-3', 'group' => 'shape', 'width' => '168', 'height' => '158', 'class' => 'text-white scale-x-[-1] rotate-[0deg] -translate-y-[100px] translate-x-[0px]')); ?>
  </div>
  <div class="absolute bottom-0 left-0 -z-10 overflow-hidden">
    <?php echo cdmdirect_svg(array('svg' => 'shape-2', 'group' => 'shape', 'width' => '590', 'height' => '558', 'class' => 'text-white scale-x-[-1] rotate-[0deg] translate-y-[450px] -translate-x-[120px]')); ?>
  </div>
</section>

<?php get_footer(); ?>