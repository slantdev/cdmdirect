<?php

/**
 * Template Name: Services
 * Template Post Type: page
 *
 */
get_header();
?>

<!-- Page Header -->
<section class="bg-black relative h-[60vh]">
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-[#4A4A4A] mix-blend-multiply opacity-70"></div>
    <img src="<?php echo cdmdirect_asset('images/banner/hero-banner-01.jpg') ?>" alt="" class="object-cover h-full w-full opacity-100">
  </div>
  <div class="container max-w-screen-xl relative z-10 pt-[216px] pb-10 h-full">
    <div class="flex h-full items-center text-white">
      <div class="w-1/2">
        <h1 class="font-bold text-[50px] leading-tight">Our Services</h1>
        <div class="mt-6">
          <p class="text-lg font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="w-1/2 flex justify-center">
        <a href="#" class="btn btn-white">Talk to us</a>
      </div>
    </div>
  </div>
</section>

<!-- Breadcrumbs -->
<div class="bg-brand-graylight py-6">
  <div class="container max-w-screen-xl">
    <div class="flex gap-x-3 text-slate-800"><a href="#" class="hover:text-brand-blue">Home</a> <span>/</span> <span class="font-bold">Our Services</span></div>
  </div>
</div>

<!-- Contact Form -->
<section class="bg-white py-32">
  <div class="container max-w-screen-xl">
    <div class="flex gap-x-16">
      <div class="w-1/3">
        <h2 class="text-brand-blue text-[34px] font-bold mb-4">Omni-Channel Australian Contact Centre Services</h2>
        <div class="mt-8 max-w-xs">
          <div class="aspect-w-1 aspect-h-1">
            <img src='https://images.pexels.com/photos/210647/pexels-photo-210647.jpeg?auto=compress&cs=tinysrgb&w=400&h=400&dpr=1' alt='' class="object-cover h-full w-full rounded-full" />
          </div>
        </div>
      </div>
      <div class="w-2/3">
        <div class="prose max-w-none">
          <p class="lead">Our call centres in Australia and New Zealand can deliver incremental sales and revenue growth while providing a delightful customer experience whether it be interacting through an inbound service centre.</p>
          <p>Our solutions offer a truly seamless omni-channel customer experience across multiple touch points to your customers, that integrates all methods of contact across one platform. Together, we can address the changing demands of your business, to figure out if you need to supplement your existing operations or need someone to take over your entire customer service operation.</p>
          <p>Whether you’re looking to service existing customers, ramp up customer acquisition or need a partner to improve your overall customer experience, we work with you to build a solution that aligns with your business goals.</p>
          <p>Since we’re already working with the financial, health, insurance, telecommunications, fast moving consumer goods and e-commerce companies across Australia and New Zealand, we can test and benchmark your existing facilities to identify opportunities for business growth.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-brand-graylight py-32">
  <div class="container max-w-screen-md text-center">
    <div class="max-w-prose mx-auto mt-12">
      <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">Application</h3>
    </div>
    <p class="font-nunito text-lg">We offer a full range of services to support your business. Whether it’s for an eCommerce store, B2B or B2C business, we can bring the human touch to your business needs 24/7. By outsourcing with us, you will be able to focus on making big decisions for the expansion and growth of your business while we manage and monitor your customers’ satisfaction.</p>
  </div>
  <div class="container max-w-screen-xl mt-12">
    <div class="grid grid-cols-3 gap-6">
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Outsourcing</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Overflow</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Customer Service</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Product Recall</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Help Desk</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Collections</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Live Chat & Social Media</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Support</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
      <a href="/our-services/outsource" class="relative block bg-white rounded-lg pl-8 pt-8 pr-16 pb-16 shadow-[0_0_20px_rgb(225,228,237,1)] hover:shadow-[0_0_24px_rgb(0,0,0,0.16)] transition duration-300">
        <?php echo cdmdirect_icon(array('icon' => 'customer-service', 'group' => 'content', 'size' => '128', 'class' => 'text-brand-blue')); ?>
        <h5 class="text-slate-800 font-bold text-[28px] mt-8 mb-6">Inbound Sales</h5>
        <p class="line-clamp-4 font-nunito">
          Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
        </p>
        <div class="absolute bottom-6 right-6">
          <?php echo cdmdirect_icon(array('icon' => 'chevron', 'group' => 'utilities', 'size' => '24', 'class' => 'text-brand-orange')); ?>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- Case Studies -->
<section class="pt-56 pb-32 bg-[#ECF1F4] relative z-10">
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


<?php get_footer(); ?>