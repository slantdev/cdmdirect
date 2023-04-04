<?php
$term_id = get_queried_object()->term_id;
if ($term_id) {
  $the_id = 'term_' . $term_id;
} else {
  $the_id = get_the_ID();
}

if (have_rows('section', $the_id)) :

  // Loop through rows.
  while (have_rows('section', $the_id)) : the_row();

    if (get_row_layout() == 'image_left_text') :
      get_template_part('template-parts/sections/image_left_text');

    elseif (get_row_layout() == 'text_image_center') :
      get_template_part('template-parts/sections/text_image_center');

    elseif (get_row_layout() == 'features_grid') :
      get_template_part('template-parts/sections/features_grid');

    elseif (get_row_layout() == 'info_cards') :
      get_template_part('template-parts/sections/info_cards');

    elseif (get_row_layout() == 'hero_slider') :
      get_template_part('template-parts/sections/hero_slider');

    elseif (get_row_layout() == 'solution_cards') :
      get_template_part('template-parts/sections/solution_cards');

    elseif (get_row_layout() == 'featured_posts_slider') :
      get_template_part('template-parts/sections/featured_posts_slider');

    elseif (get_row_layout() == 'stats_cards') :
      get_template_part('template-parts/sections/stats_cards');

    elseif (get_row_layout() == 'case_studies') :
      get_template_part('template-parts/sections/case_studies');

    elseif (get_row_layout() == 'logo_carousel') :
      get_template_part('template-parts/sections/logo_carousel');

    elseif (get_row_layout() == 'testimonial') :
      get_template_part('template-parts/sections/testimonial');

    elseif (get_row_layout() == 'resources') :
      get_template_part('template-parts/sections/resources');

    elseif (get_row_layout() == 'cta') :
      get_template_part('template-parts/sections/cta');

    elseif (get_row_layout() == 'cta_2') :
      get_template_part('template-parts/sections/cta_2');

    elseif (get_row_layout() == 'team') :
      get_template_part('template-parts/sections/team');

    elseif (get_row_layout() == 'benefits') :
      get_template_part('template-parts/sections/benefits');

    elseif (get_row_layout() == 'download_lead_gen') :
      get_template_part('template-parts/sections/download_lead_gen');

    elseif (get_row_layout() == 'contact_form_1') :
      get_template_part('template-parts/sections/contact_form_1');

    elseif (get_row_layout() == 'resources_grid') :
      get_template_part('template-parts/sections/resources_grid');

    endif;

  // End loop.
  endwhile;

// No value.
else :
// Do something...
endif;
