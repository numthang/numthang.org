<?php namespace Numthang\BlogSearch;

use File;
use System\Classes\PluginBase;

/**
 * Blog Plugin Information File
 */
class Plugin extends PluginBase {
  public $require = ['RainLab.Blog'];

  /**
   * Returns information about this plugin.
   *
   * @return array
   */
  public function pluginDetails()
  {
      return [
          'name'        => 'Numthang Blog Search Extension',
          'description' => 'A Numthang blog search extension for the RainLab.Blog plugin.',
          'author'      => 'Numthang',
          'icon'        => 'icon-leaf'
      ];
  }

  /**
   * Register plugin components
   *
   * @return array
   */
  public function registerComponents() {
    return [
        'Numthang\BlogSearch\Components\SearchResult' => 'searchResult'
    ];
  }

  public function registerMarkupTags() {
    return [
        'functions' => [
            'ddump' => function($var) { var_dump($var); }
        ]
    ];
  }
  public function boot() {
    
  }
}
