<?php

namespace Drupal\redirect_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'Custom Image Redirect' Block.
 * 
 * @Block(
 *   id = "redirect_image_block",
 *   admin_label = @Translation("Redirect Image Block"),
 * )
 */
class RedirectImageBlock extends BlockBase implements ContainerFactoryPluginInterface {

    /**
     * Config Factory.
     * 
     * @var \Drupal\redirect_block\Config\ConfigFactoryInterface
     */
    protected $configFactory;

/**
 * {@inheritdoc} 
 */    
}
