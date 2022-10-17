<?php

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a block with text and logo url new.
 * 
 * @Block(
 *   id = "simple_example_block",
 *   admin_label = @translation("Simple Text URL Block")
 * )
 */
class ExampleBlock extends BlockBase {

/**
 * {@inheritdoc} 
 */    

public function build () {

    return [
        '#type' => 'markup',
        '#markup' => '<div> 
                      <p><a href="/web/"><img alt="My Logo"  src="/web/themes/header_image.jpg" width="95" /></a></p>
                      <p>Welcome to my site.</p>
                      </div>',
           ];
   }
 }
