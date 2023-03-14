<footer class="bg-brand-graylight py-28">
  <div class="container max-w-screen-xl">
    <div class="bg-brand-bluedark rounded-xl p-10">
      <div class="flex gap-x-10 items-center">
        <div class="font-semibold text-[28px] text-white">Subscribe to our newsletters</div>
        <div class="grow flex gap-x-6">
          <input type="email" placeholder="Email address" class="grow text-lg placeholder:text-white/50 bg-transparent border-t-0 border-x-0 border-b-2 border-white focus:outline-none focus:ring-0">
          <button class="inline-block h-auto min-h-min px-8 py-3 border-2 border-white text-lg text-white font-semibold normal-case no-underline rounded-full transition-all duration-300 hover:bg-white hover:text-brand-bluedark">Send</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container max-w-screen-xl mt-16">
    <div class="flex gap-x-12">
      <div class="w-1/3">
        <div class="">
          <img src="<?php echo cdmdirect_asset('images/logo-cdm-direct.svg') ?>" alt="" class="h-32 w-auto">
        </div>
        <div class="my-6 font-nunito text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        <div class="w-20 h-0.5 bg-[#D8D8D8] my-6"></div>
        <div class="text-gray-500">
          &copy; <?php echo date_i18n('Y'); ?> <strong>Powered</strong> by <a href="#" class="text-brand-blue hover:underline">Slant Digital</a>
        </div>
      </div>
      <div class="w-2/3">
        <div class="flex gap-x-12">
          <div class="grow">
            <h5 class="font-bold text-xl leading-tight text-brand-bluedark my-8">Contact Info</h5>
            <div class="flex flex-col gap-y-6">
              <div class="flex gap-x-5">
                <div class="flex-none">
                  <img class="w-8 h-8" src="<?php echo cdmdirect_asset('images/flags/au.png') ?>" alt="">
                </div>
                <div class="">
                  <h6 class="text-lg font-semibold text-brand-bluedark mb-1">SYDNEY</h6>
                  <div>Suite 1<br />
                    345 Pacific Highway<br />
                    North Sydney, 2060 NSW</div>
                </div>
              </div>
              <div class="flex gap-x-5">
                <div class="flex-none">
                  <img class="w-8 h-8" src="<?php echo cdmdirect_asset('images/flags/au.png') ?>" alt="">
                </div>
                <div class="">
                  <h6 class="text-lg font-semibold text-brand-bluedark">MELBOURNE</h6>
                  <div>83B Hartnett Drive<br />
                    Seaford, VIC, 3198</div>
                </div>
              </div>
              <div class="flex gap-x-5">
                <div class="flex-none">
                  <img class="w-8 h-8" src="<?php echo cdmdirect_asset('images/flags/au.png') ?>" alt="">
                </div>
                <div class="">
                  <h6 class="text-lg font-semibold text-brand-bluedark">AUCKLAND</h6>
                  <div>Level 5<br />
                    210 Khyber Pass Road<br />
                    Grafton, Auckland, 1023 NZ</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grow">
            <h5 class="font-bold text-xl leading-tight text-brand-bluedark my-8">Links</h5>
            <ul class="gap-x-8 columns-2 text-lg">
              <li class="pb-2"><a href="#" class="text-brand-bluedark hover:underline">Home</a></li>
              <li class="pb-2"><a href="#" class="text-brand-bluedark hover:underline">Our services</a></li>
              <li class="pb-2"><a href="#" class="text-brand-bluedark hover:underline">Industries</a></li>
              <li class="pb-2"><a href="#" class="text-brand-bluedark hover:underline">Resources</a></li>
              <li class="pb-2"><a href="#" class="text-brand-bluedark hover:underline">About Us</a></li>
              <li class="pb-2"><a href="#" class="text-brand-bluedark hover:underline">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>