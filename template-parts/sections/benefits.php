<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

$section_intro = get_sub_field('section_intro');
$image = $section_intro['image'];
$sub_headline = $section_intro['sub_headline'];
$headline = $section_intro['headline'];
$description = $section_intro['description'];
$view_all_link = $section_intro['view_all_link'];
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="relative">
      <div class="container max-w-screen-xl">
        <div class="flex gap-x-16">
          <div class="w-2/5">
            <div class="absolute left-0 right-[60%] h-full">
              <img src='https://source.unsplash.com/MFSEP2g4YS0/1600x900' alt='' class="object-cover h-full w-full rounded-r-[300px]" />
            </div>
          </div>
          <div class="w-3/5 order-2">
            <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6">Outsourcing services to CDM Direct will expose you to the below benefits</h3>
            <p class="text-lg mb-12 font-nunito">
              As a strategic & smart business idea, outsourcing has gained much popularity in the last decade, purely due to businesses wanting to reap the benefits from outsourcing while they engage their in-house resources on more important things.
            </p>
            <div class="mt-12">
              <h4 class="uppercase text-brand-bluedark text-lg mb-4">Industry Application</h4>
              <div class="flex gap-x-6">
                <a href="#" class="py-3 px-8 rounded-full shadow-md font-bold border border-slate-300 text-brand-bluedark bg-[#EDF1F5]">Medical</a>
                <a href="#" class="py-3 px-8 rounded-full shadow-md font-bold border border-slate-300 text-brand-bluedark bg-[#EDF1F5]">Banking</a>
                <a href="#" class="py-3 px-8 rounded-full shadow-md font-bold border border-slate-300 text-brand-bluedark bg-[#EDF1F5]">Automotive</a>
                <a href="#" class="py-3 px-8 rounded-full shadow-md font-bold border border-slate-300 text-brand-bluedark bg-[#EDF1F5]">Retail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container max-w-screen-xl mt-24">
      <div class="grid grid-cols-2 gap-8">
        <div class="block bg-[#F7F9FA] rounded-lg p-10 border shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-brand-yellow font-bold text-white text-2xl">1</div>
          <h5 class="text-slate-800 font-normal text-2xl mt-8 mb-6">Getting access to skilled expertise</h5>
          <p class="font-nunito text-lg">
            One of the primary reasons why businesses outsource tasks is due to them requiring skilled expertise. The staff here at CDM Direct have years of contact centre experience behind them, who will ensure the tasks you need completed, are completed with the highest level of satisfaction.
          </p>
        </div>
        <div class="block bg-[#F7F9FA] rounded-lg p-10 border shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-brand-yellow font-bold text-white text-2xl">1</div>
          <h5 class="text-slate-800 font-normal text-2xl mt-8 mb-6">Getting access to skilled expertise</h5>
          <p class="font-nunito text-lg">
            One of the primary reasons why businesses outsource tasks is due to them requiring skilled expertise. The staff here at CDM Direct have years of contact centre experience behind them, who will ensure the tasks you need completed, are completed with the highest level of satisfaction.
          </p>
        </div>
        <div class="block bg-[#F7F9FA] rounded-lg p-10 border shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-brand-yellow font-bold text-white text-2xl">1</div>
          <h5 class="text-slate-800 font-normal text-2xl mt-8 mb-6">Getting access to skilled expertise</h5>
          <p class="font-nunito text-lg">
            One of the primary reasons why businesses outsource tasks is due to them requiring skilled expertise. The staff here at CDM Direct have years of contact centre experience behind them, who will ensure the tasks you need completed, are completed with the highest level of satisfaction.
          </p>
        </div>
        <div class="block bg-[#F7F9FA] rounded-lg p-10 border shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-brand-yellow font-bold text-white text-2xl">1</div>
          <h5 class="text-slate-800 font-normal text-2xl mt-8 mb-6">Getting access to skilled expertise</h5>
          <p class="font-nunito text-lg">
            One of the primary reasons why businesses outsource tasks is due to them requiring skilled expertise. The staff here at CDM Direct have years of contact centre experience behind them, who will ensure the tasks you need completed, are completed with the highest level of satisfaction.
          </p>
        </div>
        <div class="block bg-[#F7F9FA] rounded-lg p-10 border shadow-[0_0_20px_rgb(225,228,237,1)]">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-brand-yellow font-bold text-white text-2xl">1</div>
          <h5 class="text-slate-800 font-normal text-2xl mt-8 mb-6">Getting access to skilled expertise</h5>
          <p class="font-nunito text-lg">
            One of the primary reasons why businesses outsource tasks is due to them requiring skilled expertise. The staff here at CDM Direct have years of contact centre experience behind them, who will ensure the tasks you need completed, are completed with the highest level of satisfaction.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>