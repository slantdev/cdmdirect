<?php

/**
 * Template Name: About
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
        <h1 class="font-bold text-[50px] leading-tight">Who we are</h1>
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
    <div class="flex gap-x-3 text-slate-800"><a href="#" class="hover:text-brand-blue">Home</a> <span>/</span> <span class="font-bold">About CDM Direct</span></div>
  </div>
</div>

<!-- Intro -->
<section class="bg-white py-32">
  <div class="container max-w-screen-xl">
    <div class="flex">
      <div class="w-1/2 pr-20">
        <h2 class="text-brand-blue text-[34px] font-bold">We convert your ideas into workable solutions</h2>
      </div>
      <div class="w-1/2">
        <div class="prose max-w-none">
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl mt-20">
    <div class="aspect-w-16 aspect-h-6">
      <img src='https://source.unsplash.com/3WAMh1omVAY/1600x900' alt='' class="object-cover h-full w-full rounded-tl-[300px] rounded-tr-[300px] rounded-br-[120px] rounded-bl-[300px]" />
    </div>
  </div>
</section>

<!-- Team -->
<section class="bg-brand-graylight py-32">
  <div class="container max-w-screen-md text-center">
    <div class="max-w-prose mx-auto mt-12">
      <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">The Team</h3>
    </div>
    <p class="font-nunito text-lg">We’re more like a knowledge warehouse; you’ll find every conceivable customer care solution your business needs to grow bigger, faster, stronger – all under one roof. But 30 years serving at the frontlines of customer service has taught us that it’s not until you convert that knowledge into wisdom and insight that the magic really happens.</p>
  </div>
  <div class="container max-w-screen-xl mt-20">
    <div class="grid grid-cols-3 border-r border-b border-[#D0D0D0]">
      <label for="my-modal-4" class="block py-12 p-16 bg-white border-l border-t border-[#D0D0D0] cursor-pointer">
        <div class="mb-5 text-center">
          <img src='https://source.unsplash.com/3TLl_97HNJo/240x240' alt='' class="rounded-full mx-auto" />
        </div>
        <div class="relative pr-6">
          <h4 class="font-normal text-2xl text-slate-800">Sandhya Le Grand</h4>
          <h5 class="font-bold text-lg text-slate-800">Chief Operating Officer</h5>
          <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'absolute -right-6 top-1 text-brand-blue')); ?>
        </div>
      </label>
      <div class="block py-12 p-16 bg-white border-l border-t border-[#D0D0D0]">
        <div class="mb-5 text-center">
          <img src='https://source.unsplash.com/3TLl_97HNJo/240x240' alt='' class="rounded-full mx-auto" />
        </div>
        <div class="relative pr-6">
          <h4 class="font-normal text-2xl text-slate-800">Sandhya Le Grand</h4>
          <h5 class="font-bold text-lg text-slate-800">Chief Operating Officer</h5>
          <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'absolute -right-6 top-1 text-brand-blue')); ?>
        </div>
      </div>
      <div class="py-12 p-16 bg-white border-l border-t border-[#D0D0D0]">
        <div class="mb-5 text-center">
          <img src='https://source.unsplash.com/3TLl_97HNJo/240x240' alt='' class="rounded-full mx-auto" />
        </div>
        <div class="relative pr-6">
          <h4 class="font-normal text-2xl text-slate-800">Sandhya Le Grand</h4>
          <h5 class="font-bold text-lg text-slate-800">Chief Operating Officer</h5>
          <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'absolute -right-6 top-1 text-brand-blue')); ?>
        </div>
      </div>
      <div class="py-12 p-16 bg-white border-l border-t border-[#D0D0D0]">
        <div class="mb-5 text-center">
          <img src='https://source.unsplash.com/3TLl_97HNJo/240x240' alt='' class="rounded-full mx-auto" />
        </div>
        <div class="relative pr-6">
          <h4 class="font-normal text-2xl text-slate-800">Sandhya Le Grand</h4>
          <h5 class="font-bold text-lg text-slate-800">Chief Operating Officer</h5>
          <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'absolute -right-6 top-1 text-brand-blue')); ?>
        </div>
      </div>
      <div class="py-12 p-16 bg-white border-l border-t border-[#D0D0D0]">
        <div class="mb-5 text-center">
          <img src='https://source.unsplash.com/3TLl_97HNJo/240x240' alt='' class="rounded-full mx-auto" />
        </div>
        <div class="relative pr-6">
          <h4 class="font-normal text-2xl text-slate-800">Sandhya Le Grand</h4>
          <h5 class="font-bold text-lg text-slate-800">Chief Operating Officer</h5>
          <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'absolute -right-6 top-1 text-brand-blue')); ?>
        </div>
      </div>
      <div class="py-12 p-16 bg-white border-l border-t border-[#D0D0D0]">
        <div class="mb-5 text-center">
          <img src='https://source.unsplash.com/3TLl_97HNJo/240x240' alt='' class="rounded-full mx-auto" />
        </div>
        <div class="relative pr-6">
          <h4 class="font-normal text-2xl text-slate-800">Sandhya Le Grand</h4>
          <h5 class="font-bold text-lg text-slate-800">Chief Operating Officer</h5>
          <?php echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'absolute -right-6 top-1 text-brand-blue')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<input type="checkbox" id="my-modal-4" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
  <label class="modal-box max-w-4xl p-0 relative" for="">
    <label for="my-modal-4" class="absolute right-6 top-4 text-4xl cursor-pointer font-light text-slate-400 hover:text-slate-800 transition duration-300">✕</label>
    <div class="flex">
      <div class="w-1/2">
        <img src='https://source.unsplash.com/3TLl_97HNJo/500x500' alt='' class="h-full w-full object-cover" />
      </div>
      <div class="w-1/2 pt-16 py-8 px-8">
        <div class="flex flex-col h-full">
          <h3 class="text-[30px] font-light leading-tight text-slate-800">Mandy Admiraal</h3>
          <h4 class="font-bold text-xl leading-tight text-slate-800">General Manager AU</h4>
          <div class="prose overflow-y-auto max-h-80 mt-6">
            <p>Mandy brings with her more than 17 years of management experience. She currently holds a double degree in marketing and media communications. Not to mention, she also has postgraduate qualifications in front line management and lead auditing of quality and management systems.</p>
            <p>Mandy’s role is based heavily around client services and is very much results driven. She takes over the day to day operations of her campaigns. All the while making sure that our client is always kept up to date and informed. Besides, she’s well known for providing bespoke alternative solutions to her clients, that offers cost savings and quality outcomes.</p>
            <p>Furthermore, she has built up an extensive portfolio of clients across all sectors and industries. She always provides valuable guidance and feedback before the campaign launches to help shape the scope of the project. This ensures the client’s objectives are met and their expectations exceeded, whilst always promoting clear and open lines of communication as well as around the clock support.</p>
          </div>
        </div>
      </div>
    </div>
  </label>
</label>

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

<!-- Why Clients Choose Us -->
<section class="bg-brand-graylight py-32">
  <div class="container max-w-screen-lg text-center">
    <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium">Featured</span></h4>
    <div class="max-w-prose mx-auto mt-12">
      <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">NEARSHORE SOLUTIONS & BENEFITS</h3>
    </div>
    <div class="pros prose-lg max-w-none font-nunito text-center">
      <p>Our offshore branch in New Zealand provides significant benefits to both cost and efficiency, without any culture gap. Ultimately we know, these points are going to make all the difference when representing your business.</p>
      <p>Besides, employment costs including superannuation, payroll tax and workers compensation can amount to 17% in Australia, while in New Zealand they amount to just 3.8%. In dollar terms, a 200-FTE operation can save over AUD $1.5m by offshoring the service to New Zealand. This combined with the price of commercial space, a New Zealand average wage and a kiwis’ work efficiency being ranked in the top 10 on the globe, made the decision obvious.</p>
      <p>In sum, we saw the benefits and take that opportunity to operate with our next door neighbours to provide you with only the best in Call Centre Solutions.</p>
    </div>
  </div>
  <div class="container max-w-screen-xl mt-20">
    <div class="grid grid-cols-3 gap-20">
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'flexible', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Agile</h4>
        <p class="line-clamp-3 font-nunito">We are able to adapt to a changing business landscape quickly and seamlessly.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'security', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">People</h4>
        <p class="line-clamp-3 font-nunito">Our people become your people, offering the highest standard of customer service to your customers.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'agent', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Experience</h4>
        <p class="line-clamp-3 font-nunito">We have over 25 years of experience working across a wide range of fields.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'chat', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Responsive</h4>
        <p class="line-clamp-3 font-nunito">We have over 25 years of experience working across a wide range of fields.</p>
      </div>
      <div>
        <div class="mb-4">
          <?php echo cdmdirect_icon(array('icon' => 'peak', 'group' => 'content', 'size' => '80', 'class' => 'text-brand-blue')); ?>
        </div>
        <h4 class="text-[22px] leading-tight font-bold text-brand-bluedark mb-4">Technology</h4>
        <p class="line-clamp-3 font-nunito">We have made the investment in state of the art of technology so that you don’t have to.</p>
      </div>
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


<?php get_footer(); ?>