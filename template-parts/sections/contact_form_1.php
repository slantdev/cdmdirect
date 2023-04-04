<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

?>

<section class="bg-white py-24">
  <div class="container max-w-screen-xl">
    <div class="flex">
      <div class="w-1/2 pr-20">
        <h2 class="text-brand-bluedark text-[45px] font-bold mb-4">Talk to us about Outsourcing</h2>
        <div class="prose max-w-none">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <div class="w-1/2">
        <div class="grid grid-cols-2 gap-6 mb-6">
          <div><input type="text" placeholder="First Name" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
          <div><input type="text" placeholder="Last Name" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
          <div><input type="text" placeholder="Phone" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
          <div><input type="text" placeholder="Email" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
          <div><input type="text" placeholder="Company Name" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
          <div><input type="text" placeholder="Area of Inquiry" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
        </div>
        <button class="btn btn-primary"><span>Submit</span></button>
      </div>
    </div>
  </div>
</section>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-xl">
      <div class="flex">
        <div class="w-1/2 pr-20">
          <h2 class="text-brand-bluedark text-[45px] font-bold mb-4">Talk to us about Outsourcing</h2>
          <div class="prose max-w-none">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="w-1/2">
          <div class="grid grid-cols-2 gap-6 mb-6">
            <div><input type="text" placeholder="First Name" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
            <div><input type="text" placeholder="Last Name" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
            <div><input type="text" placeholder="Phone" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
            <div><input type="text" placeholder="Email" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
            <div><input type="text" placeholder="Company Name" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
            <div><input type="text" placeholder="Area of Inquiry" class="input rounded-none w-full border-t-0 border-x-0 border-b border-slate-400 focus:outline-0 focus:ring-0 focus:border-brand-blue"></div>
          </div>
          <button class="btn btn-primary"><span>Submit</span></button>
        </div>
      </div>
    </div>
  </div>
</section>