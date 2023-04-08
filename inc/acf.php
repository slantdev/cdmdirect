<?php


/*
 * Add color picker pallete on admin
 */
function cdmdirect_acf_input_admin_footer()
{
?>
  <script type="text/javascript">
    (function($) {

      acf.add_filter('color_picker_args', function(args, $field) {

        args.palettes = ['#000000', '#FFFFFF', '#58595B', '#64748B', '#F3F1EF', '#F7F9FA', '#002F56', '#1068F0', '#0583FF', '#00BBF0', '#F8810A', '#FFCB00', '#F03105', '#6852ED']

        return args;

      });

    })(jQuery);
  </script>
<?php
}
add_action('acf/input/admin_footer', 'cdmdirect_acf_input_admin_footer');


/*
 * ACF Icon Picker
 * Modify the path to the icons directory
 * https://github.com/houke/acf-icon-picker
 */
add_filter('acf_icon_path_suffix', 'acf_icon_path_suffix');
function acf_icon_path_suffix($path_suffix)
{
  return 'assets/icons/content/';
}

/*
 * ACF Extended Layout Thumbnails
 * https://www.acf-extended.com/features/fields/flexible-content/advanced-settings
 * @int/string  $thumbnail  Thumbnail ID/URL
 * @array       $field      Field settings
 * @array       $layout     Layout settings
 */
add_filter('acfe/flexible/thumbnail/layout=benefits', 'benefits_thumbnail', 10, 3);
function benefits_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/benefits.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=case_studies', 'case_studies_thumbnail', 10, 3);
function case_studies_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/case_studies.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=contact_center', 'contact_center_thumbnail', 10, 3);
function contact_center_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/contact_center.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=contact_form_1', 'contact_form_1_thumbnail', 10, 3);
function contact_form_1_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/contact_form_1.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=contact_form_2', 'contact_form_2_thumbnail', 10, 3);
function contact_form_2_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/contact_form_2.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=cta', 'cta_thumbnail', 10, 3);
function cta_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/cta.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=cta_2', 'cta_2_thumbnail', 10, 3);
function cta_2_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/cta_2.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=download_lead_gen', 'download_lead_gen_thumbnail', 10, 3);
function download_lead_gen_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/download_lead_gen.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=featured_posts_slider', 'featured_posts_slider_thumbnail', 10, 3);
function featured_posts_slider_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/featured_posts_slider.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=features_grid', 'features_grid_thumbnail', 10, 3);
function features_grid_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/features_grid.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=hero_slider', 'hero_slider_thumbnail', 10, 3);
function hero_slider_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/hero_slider.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=image_left_text', 'image_left_text_thumbnail', 10, 3);
function image_left_text_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/image_left_text.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=info_cards', 'info_cards_thumbnail', 10, 3);
function info_cards_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/info_cards.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=logo_carousel', 'logo_carousel_thumbnail', 10, 3);
function logo_carousel_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/logo_carousel.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=resources_grid', 'resources_grid_thumbnail', 10, 3);
function resources_grid_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/resources_grid.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=resources', 'resources_thumbnail', 10, 3);
function resources_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/resources.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=solution_cards', 'solution_cards_thumbnail', 10, 3);
function solution_cards_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/solution_cards.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=stats_cards', 'stats_cards_thumbnail', 10, 3);
function stats_cards_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/stats_cards.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=team', 'team_thumbnail', 10, 3);
function team_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/team.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=testimonial', 'testimonial_thumbnail', 10, 3);
function testimonial_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/testimonial.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=text_image_center', 'text_image_center_thumbnail', 10, 3);
function text_image_center_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/text_image_center.jpg';
}
