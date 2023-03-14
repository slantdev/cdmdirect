<?php

/**
 * Template Name: Contact
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
        <h1 class="font-bold text-[50px] leading-tight">Contact us</h1>
        <div class="mt-6">
          <p class="text-lg font-medium">Corporate finance does not begin with the numbers, rather it starts with the people behind the numbers.</p>
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
    <div class="flex gap-x-3 text-slate-800"><a href="#" class="hover:text-brand-blue">Home</a> <span>/</span> <span class="font-bold">Contact CDM Direct</span></div>
  </div>
</div>

<!-- Contact Form -->
<section class="bg-white py-32">
  <div class="container max-w-screen-xl">
    <div class="flex">
      <div class="w-1/2 pr-20">
        <h2 class="text-brand-blue text-[34px] font-bold mb-4">Enquire about our services now</h2>
        <div class="prose max-w-none">
          <p>We offer a full range of services to support your business. Whether it’s for an eCommerce store, B2B or B2C business, we can bring the human touch your business needs 24/7. So get in touch with us to find out more about our Australian and New Zealand contact centre services. By outsourcing with us, you will be able to focus on making big decisions for the expansion and growth of your business while we manage and monitor your customers’ satisfaction.</p>
          <div class="mt-10">
            <p><strong>Phone:</strong> 1800 221 811</br />
              <strong>International:</strong> +61 3 8789 4444</br />
              <strong>Email:</strong> info@cdmdirect.com.au
            </p>
          </div>
        </div>
      </div>
      <div class="w-1/2">
        <div class="grid grid-cols-2 gap-6 mb-6">
          <div><input type="text" placeholder="First Name" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
          <div><input type="text" placeholder="Last Name" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></div>
          <div><input type="text" placeholder="Phone" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
          <div><input type="text" placeholder="Email" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></div>
          <div><input type="text" placeholder="Company Name" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
          <div><input type="text" placeholder="Position" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></div>
          <div class="col-span-2"><input type="text" placeholder="Area of Inquiry" class="input w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:outline-brand-blue"></div>
          <div class="col-span-2"><textarea placeholder="Message" class="textarea text-base w-full border border-slate-200 shadow-[inset_0px_2px_6px_0px_rgba(0,0,0,0.12)] focus:outline-0 focus:border-brand-blue"></textarea></div>
        </div>
        <button class="btn btn-primary"><span>Send message</span></button>
      </div>
    </div>
  </div>
</section>

<section class="bg-[#F7F9FA] py-32">
  <div class="container max-w-screen-xl">
    <div class="flex items-center gap-x-16">
      <div class="w-1/2">
        <h2 class="text-brand-blue text-[34px] font-bold">Australian Contact Centre Services</h2>
      </div>
      <div class="w-1/2">
        <div class="prose max-w-none">
          <p>Get in touch through one of our contact centres in Australia to find out more about our Australian contact centre services.</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-x-16 mt-12">
      <div>
        <div class="aspect-w-3 aspect-h-2">
          <img src='<?php echo cdmdirect_asset('images/map/map-sydney.jpg') ?>' alt='' class="object-cover h-full w-full rounded-lg" />
        </div>
        <div class="mt-10">
          <h4 class="pb-4 border-b border-slate-300 mb-4 font-bold text-[28px] text-slate-800">Sydney</h4>
          <p class="text-lg text-slate-800">Suite 1, 345 Pacific Highway<br />
            North Sydney, 2060 NSW<br />
            Australia</p>
        </div>
      </div>
      <div>
        <div class="aspect-w-3 aspect-h-2">
          <img src='<?php echo cdmdirect_asset('images/map/map-melbourne.jpg') ?>' alt='' class="object-cover h-full w-full rounded-lg" />
        </div>
        <div class="mt-10">
          <h4 class="pb-4 border-b border-slate-300 mb-4 font-bold text-[28px] text-slate-800">Melbourne</h4>
          <p class="text-lg text-slate-800">83B Hartnett Drive<br />
            Seaford, VIC, 3198<br />
            Australia</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl mt-20">
    <div class="flex items-center gap-x-16">
      <div class="w-1/2">
        <h2 class="text-brand-blue text-[34px] font-bold">New Zealand Contact Centre Services</h2>
      </div>
      <div class="w-1/2">
        <div class="prose max-w-none">
          <p>Get in touch through our contact centre in Auckland to find out more about our New Zealand contact centre services.</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-x-16 mt-12">
      <div class="col-span-2">
        <div class="aspect-w-16 aspect-h-6">
          <img src='<?php echo cdmdirect_asset('images/map/map-auckland.jpg') ?>' alt='' class="object-cover h-full w-full rounded-lg" />
        </div>
        <div class="mt-10">
          <h4 class="pb-4 border-b border-slate-300 mb-4 font-bold text-[28px] text-slate-800">Auckland</h4>
          <p class="text-lg text-slate-800">Level 5, 210 Khyber Pass Road<br />
            Grafton, Auckland, 1023<br />
            New Zealand</p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>