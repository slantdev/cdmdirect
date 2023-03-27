<?php
// $term_id = get_queried_object()->term_id;
// if ($term_id) {
//   $the_id = 'term_' . $term_id;
// } else {
//   $the_id = get_the_ID();
// }

$field = $args['field'];
$class = $args['class'];

if ($field) {
  $heading = get_sub_field($field);
} else {
  $heading = get_sub_field('heading');
}
$heading_text = $heading['heading_text'];
$heading_color = $heading['heading_color'];
$heading_size = $heading['heading_size'];
$heading_html_tag = $heading['heading_html_tag'];
$heading_alignment = $heading['heading_alignment'];
$heading_margin_top = $heading['heading_margin']['margin_top'];
$heading_margin_bottom = $heading['heading_margin']['margin_bottom'];
$heading_class = $class;
$heading_style = '';
if ($heading_color) {
  $heading_style = 'color: ' . $heading_color;
}
switch ($heading_size) {
  case "xs":
    $heading_class .= ' text-xs';
    break;
  case "sm":
    $heading_class .= ' text-xs xl:text-sm';
    break;
  case "md":
    $heading_class .= ' text-sm xl:text-md';
    break;
  case "lg":
    $heading_class .= ' text-md xl:text-lg';
    break;
  case "xl":
    $heading_class .= ' text-lg xl:text-xl';
    break;
  case "2xl":
    $heading_class .= ' text-xl xl:text-2xl';
    break;
  case "3xl":
    $heading_class .= ' text-2xl xl:text-3xl';
    break;
  case "4xl":
    $heading_class .= ' text-3xl xl:text-4xl';
    break;
  case "5xl":
    $heading_class .= ' text-4xl xl:text-5xl';
    break;
  default:
    $heading_class .= '';
}
switch ($heading_margin_top) {
  case "none":
    $heading_class .= ' mt-0';
    break;
  case "xs":
    $heading_class .= ' mt-2 xl:mt-4';
    break;
  case "sm":
    $heading_class .= ' mt-4 xl:mt-8';
    break;
  case "md":
    $heading_class .= ' mt-8 xl:mt-12';
    break;
  case "lg":
    $heading_class .= ' mt-12 xl:mt-16';
    break;
  case "xl":
    $heading_class .= ' mt-16 xl:mt-20';
    break;
  case "2xl":
    $heading_class .= ' mt-20 xl:mt-24';
    break;
  default:
    $heading_class .= ' mt-4 xl:mt-8';
}
switch ($heading_margin_bottom) {
  case "none":
    $heading_class .= ' mb-0';
    break;
  case "xs":
    $heading_class .= ' mb-2 xl:mb-4';
    break;
  case "sm":
    $heading_class .= ' mb-4 xl:mb-8';
    break;
  case "md":
    $heading_class .= ' mb-8 xl:mb-12';
    break;
  case "lg":
    $heading_class .= ' mb-12 xl:mb-16';
    break;
  case "xl":
    $heading_class .= ' mb-16 xl:mb-20';
    break;
  case "2xl":
    $heading_class .= ' mb-20 xl:mb-24';
    break;
  default:
    $heading_class .= ' mb-4 xl:mb-8';
}
switch ($heading_alignment) {
  case "left":
    $heading_class .= ' text-left';
    break;
  case "center":
    $heading_class .= ' text-center';
    break;
  case "right":
    $heading_class .= ' text-right';
    break;
  default:
    $heading_class .= '';
}

if ($heading_text) {
  echo '<div class="not-prose">';
  echo '<' . $heading_html_tag . ' class="' . $heading_class . '" style="' . $heading_style . '">';

  if (isset($args['border'])) {
    $border = $args['border'];
    $border_style = '';
    if ($border['border_enable']) {
      $border_style .= ' border-style: solid;';
    }
    if ($border['border_color']) {
      $border_style .= ' border-color: ' . $border['border_color'] . ';';
    }
    if ($border['border_size']) {
      $border_style .= ' border-bottom-width: ' . $border['border_size'] . 'px;';
    }
    if ($border['border_enable']) {
      echo '<span class="inline-block pb-3 border-b-2 border-brand-blue" style="' . $border_style . '">';
    }
  }

  echo $heading_text;

  if (isset($args['border'])) {
    $border = $args['border'];
    if ($border['border_enable']) {
      echo '</span>';
    }
  }
  echo '</' . $heading_html_tag . '>';
  echo '</div>';
}
