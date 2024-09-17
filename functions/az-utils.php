<?php

function az_get_image_data($image_id) {
  $image_data = get_post($image_id);
  return array(
    'alt' => get_post_meta( $image_data->ID, '_wp_attachment_image_alt', true ),
    'caption' => $image_data->post_excerpt,
    'description' => $image_data->post_content
  );  
}

function az_get_external_post_link($az_post_data) {

    if (!$az_post_data) return false;

    $external_link = $az_post_data['link'];

    if (!$external_link) return false;

    $link_target = $external_link['target'] ? $external_link['target'] : '_self';

    return array(
      'link' => $external_link['url'],
      'target' => $link_target
    );
}
