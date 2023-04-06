<article id="post-<?php the_ID(); ?>" <?php post_class('py-12 xl:py-20'); ?>>
  <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-8 xl:gap-x-36">
    <div class="w-2/3">
      <div class="prose max-w-none xl:prose-lg">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  </div>
</article>