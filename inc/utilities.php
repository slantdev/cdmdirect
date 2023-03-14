<?php

/**
 * Add container to video embeds in WordPress
 *
 * @refer  http://alxmedia.se/code/2013/10/make-wordpress-default-video-embeds-responsive/
 */
function cdmdirect_video_container($html)
{
  return '<div class="aspect-w-16 aspect-h-9">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'cdmdirect_video_container', 10, 3);
add_filter('video_embed_html', 'cdmdirect_video_container'); // Jetpack
