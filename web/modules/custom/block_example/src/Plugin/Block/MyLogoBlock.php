<?php

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\block_content\Entity\BlockContent;

/**
 * Provides a block with text and logo url.
 * 
 * @Block(
 *   id = "simple_logo_block",
 *   admin_label = @translation("Simple Logo URL Block")
 * )
 */
class MyLogoBlock extends BlockBase {

/**
 * {@inheritdoc} 
 */    

public function build () {
    
    $block_content = BlockContent::create([
        
        'info' => 'Simple Logo URL Block',
        'machine_name' => 'simple_logo_block',
        'body' => [
          'value' => '<div> 
                      <p><a href="/web/"><img alt="My Logo" src="/web/themes/header_image.jpg" width="95" /></a></p>
                      <p>Welcome to my site.</p>
                      </div>',
          'format' => 'full_html',
        ],
        'type' => 'basic',
        'langcode' => 'en',
      ]);
      $block_content->save();
   }
}