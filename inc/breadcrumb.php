<?php
/*
 * Multiple examples of how to customize the Yoast SEO breadcrumbs
 * https://gist.github.com/amboutwe/ea0791e184668a5c7bd7bbe357c598e9
 */

add_filter('wpseo_breadcrumb_links', 'cdmdirect_yoast_seo_breadcrumb_append_link');
function cdmdirect_yoast_seo_breadcrumb_append_link($links)
{
  global $post;

  if (is_singular('services')) {
    $breadcrumb[] = array(
      'url' => site_url('/services/'),
      'text' => 'Services',
    );
    array_splice($links, 1, -2, $breadcrumb);
  } elseif (is_tax('industry')) {
    $breadcrumb[] = array(
      'url' => site_url('/industry/'),
      'text' => 'Industry',
    );
    array_splice($links, 1, -2, $breadcrumb);
  }

  return $links;
}
