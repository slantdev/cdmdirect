<?php
$about = get_field('about', 'option');
$contact_info = get_field('contact_info', 'option');
$footer_links = get_field('footer_links', 'option');
$newsletter_title = get_field('newsletter_title', 'option');
$newsletter_form_shortcode = get_field('newsletter_form_shortcode', 'option');
?>

<footer class="bg-brand-graylight py-28">
  <div class="container max-w-screen-xl">
    <div class="bg-brand-bluedark rounded-xl p-10">
      <div class="flex gap-x-10 items-center">
        <?php if ($newsletter_title) : ?>
          <div class="w-2/5 font-semibold text-[28px] leading-tight text-white"><?php echo $newsletter_title ?></div>
        <?php endif; ?>
        <?php if ($newsletter_form_shortcode) : ?>
          <div class="w-3/5">
            <?php echo do_shortcode($newsletter_form_shortcode); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl mt-16">
    <div class="flex gap-x-12">
      <div class="w-1/3">
        <div class="">
          <img src="<?php echo cdmdirect_asset('images/logo-cdm-direct.svg') ?>" alt="" class="h-32 w-auto">
        </div>
        <?php if ($about['about_company']) : ?>
          <div class="my-6 font-nunito text-lg">
            <?php echo $about['about_company'] ?>
          </div>
        <?php endif; ?>
        <div class="w-20 h-0.5 bg-[#D8D8D8] my-6"></div>
        <?php if ($about['copyright_info']) : ?>
          <div class="text-gray-500">
            <?php echo $about['copyright_info'] ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="w-2/3">
        <div class="flex gap-x-12">
          <div class="grow">
            <?php if ($contact_info) : ?>
              <h5 class="font-bold text-xl leading-tight text-brand-bluedark my-8">Contact Info</h5>
              <div class="flex flex-col gap-y-6">
                <?php foreach ($contact_info as $contact) : ?>
                  <div class="flex gap-x-5">
                    <div class="flex-none">
                      <?php if ($contact['country'] == 'au') {
                        echo '<img class="w-8 h-8" src="' . cdmdirect_asset('images/flags/au.png') . '" alt="">';
                      } else if ($contact['country'] == 'nz') {
                        echo '<img class="w-8 h-8" src="' . cdmdirect_asset('images/flags/au.png') . '" alt="">';
                      } ?>
                    </div>
                    <div class="">
                      <?php if ($contact['heading']) : ?>
                        <h6 class="text-lg font-semibold text-brand-bluedark mb-1"><?php echo $contact['heading'] ?></h6>
                      <?php endif; ?>
                      <?php if ($contact['address']) : ?>
                        <div><?php echo $contact['address'] ?></div>
                    </div>
                  <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="grow">
            <?php if ($footer_links) : ?>
              <h5 class="font-bold text-xl leading-tight text-brand-bluedark my-8">Links</h5>
              <ul class="gap-x-8 columns-2 text-lg">
                <?php foreach ($footer_links as $link) : ?>
                  <li class="pb-2"><a href="<?php echo $link['link']['url'] ?>" class="text-brand-bluedark hover:underline"><?php echo $link['link']['title'] ?></a></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>