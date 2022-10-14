<?php

/**
 * @file
 * File to create default content for drupaltest.
 */

use Drupal\block_content\Entity\BlockContent;

/**
 * Create default logo url block content.
 */
function block_example_create_default_content() {
  // Create logo url block.
  block_example_create_logo_url_block_content();
}

/**
 * Create logo block content for drupaltest.
 */
function block_example_create_logo_url_block_content() {
  // Footer logo path.
  //$logo_path = '/' . drupal_get_path('theme', 'alshaya_hnm') . '/h-m-logo-bw.svg';
  // Create footer logo block content.
  $block_content = BlockContent::create([
    'info' => 'Simple Logo URL Block',
    'machine_name' => 'simple_logo_block',
    'body' => [
      'value' => "<div> 
                  <a href='/web/'>
                  <img alt='My Logo' src='/web/themes/header_image.jpg' width='95' />
                  </a>
                  <p>Welcome to my site.</p>
                  </div>",
      'format' => 'rich_text',
    ],
    'type' => 'basic',
    'langcode' => 'en',
  ]);
  $block_content->save();
}
