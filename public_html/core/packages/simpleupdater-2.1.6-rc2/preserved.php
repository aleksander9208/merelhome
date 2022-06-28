<?php return array (
  '82e676b953883145eb63ac9a97c6f845' => 
  array (
    'criteria' => 
    array (
      'name' => 'simpleupdater',
    ),
    'object' => 
    array (
      'name' => 'simpleupdater',
      'path' => '{core_path}components/simpleupdater/',
      'assets_path' => '',
    ),
  ),
  '6c53e98bac9a7c200119570e71b197b2' => 
  array (
    'criteria' => 
    array (
      'text' => 'simpleupdater',
    ),
    'object' => 
    array (
      'text' => 'simpleupdater',
      'parent' => 'components',
      'action' => '3',
      'description' => 'simpleupdater_menu_desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  '019128342ed7129ba1e769a6d02d0ebf' => 
  array (
    'criteria' => 
    array (
      'category' => 'simpleUpdater',
    ),
    'object' => 
    array (
      'id' => 9,
      'parent' => 0,
      'category' => 'simpleUpdater',
      'rank' => 0,
    ),
  ),
  '222337c46bb042b0616d02f611ec55f4' => 
  array (
    'criteria' => 
    array (
      'name' => 'simpleUpdater',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'simpleUpdater',
      'description' => '',
      'editor_type' => 0,
      'category' => 9,
      'cache_type' => 0,
      'plugincode' => 'switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        if ($modx->user->isMember(\'Administrator\')) {
            $modx->controller->addLexiconTopic(\'simpleupdater:default\');
            $modx->controller->addJavascript($modx->getOption(\'assets_url\').\'components/simpleupdater/js/mgr/widgets/update.button.js\');
            $response = $modx->runProcessor(\'mgr/version/check\', array(), array(\'processors_path\' => $modx->getOption(\'core_path\') . \'components/simpleupdater/processors/\'));
            $resObj = $response->getObject();
            $_html = "<script>	var simpleUpdateConfig = " . $modx->toJSON($resObj) . ";</script>";
            $modx->controller->addHtml($_html);
        }
        break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/simpleupdater/elements/plugins/plugin.simpleupdater.php',
      'content' => 'switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        if ($modx->user->isMember(\'Administrator\')) {
            $modx->controller->addLexiconTopic(\'simpleupdater:default\');
            $modx->controller->addJavascript($modx->getOption(\'assets_url\').\'components/simpleupdater/js/mgr/widgets/update.button.js\');
            $response = $modx->runProcessor(\'mgr/version/check\', array(), array(\'processors_path\' => $modx->getOption(\'core_path\') . \'components/simpleupdater/processors/\'));
            $resObj = $response->getObject();
            $_html = "<script>	var simpleUpdateConfig = " . $modx->toJSON($resObj) . ";</script>";
            $modx->controller->addHtml($_html);
        }
        break;
}',
    ),
  ),
  'c1b2cb825def1b8138846e2514df8815' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 8,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 8,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);