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

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative z-10 <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="container max-w-screen-xl relative">
      <div class="flex gap-x-12">
        <div class="w-1/2">
          <h4><span class="inline-block pb-3 border-b-2 border-brand-blue text-lg text-slate-800 font-medium">Results we have delivered</span></h4>
          <h3 class="text-[34px] leading-tight font-bold text-brand-bluedark mt-6 mb-6">Our Case Studies</h3>
        </div>
        <div class="w-1/2 flex flex-col items-end">
          <a href="#" class="text-brand-blue text-lg font-bold hover:underline">View All</a>
          <!-- <select name="" id="" class="mt-6 rounded-full bg-white pl-8 pr-12 py-4 font-bold text-slate-800 border-none min-w-[280px] shadow-inner">
            <option value="">Featured</option>
            <option value="">Option 1</option>
            <option value="">Option 2</option>
            <option value="">Option 3</option>
          </select> -->
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
  </div>
</section>