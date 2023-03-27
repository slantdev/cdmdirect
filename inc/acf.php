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

        args.palettes = ['#000000', '#FFFFFF', '#58595B', '#64748B', '#F3F1EF', '#002F56', '#1068F0', '#0583FF', '#00BBF0', '#F8810A', '#FFCB00', '#F03105', '#6852ED']

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
