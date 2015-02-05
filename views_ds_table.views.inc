<?php

/**
 * Implements hook_views_plugins().
 */
function views_ds_table_views_plugins() {
  $plugins = array(
    'style' => array(
      // Default settings for all style plugins.
      'views_ds_table' => array(
        'title' => t('Views Display Suite table'),
        'help' => t('Use view modes for table rows.'),
        'handler' => 'views_plugin_style_views_ds_table',
        'theme' => 'views_ds_table',
        'uses row plugin' => TRUE,
        'uses row class' => TRUE,
        'uses grouping' => TRUE,
        'uses options' => TRUE,
        'type' => 'normal',
        'help topic' => 'style-unformatted',
      ),
    )
  );

  return $plugins;
}

/**
 * @file
 * Contains the default style plugin.
 */

/**
 * Default style plugin to render rows one after another with no
 * decorations.
 *
 * @ingroup views_style_plugins
 */
class views_plugin_style_views_ds_table extends views_plugin_style_default {

}
