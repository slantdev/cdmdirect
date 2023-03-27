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
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
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
  </div>
</section>