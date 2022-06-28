<?php return array (
  'f72dd93b90a61b6813481dfbb37ece7e' => 
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
  'f627c150322ad2011c43679a68f2aef0' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'simpleupdater',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 3,
      'namespace' => 'simpleupdater',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'simpleupdater:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '00424e4298043dc5eade6722a2151b1d' => 
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
  'd6cef602f2c2ed38dea972d16ac4bedc' => 
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
  '0c2a2c268bfedd5d9c2a8e04560a51bd' => 
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
        $modx->controller->addLexiconTopic(\'simpleupdater:default\');
        $modx->controller->addCss($modx->getOption(\'assets_url\').\'components/simpleupdater/css/mgr/main.css\');
        $modx->controller->addJavascript($modx->getOption(\'assets_url\').\'components/simpleupdater/js/mgr/widgets/update.button.js\');
        $response = $modx->runProcessor(\'mgr/version/check\', array(), array(\'processors_path\' => $modx->getOption(\'core_path\') . \'components/simpleupdater/processors/\'));
        $resObj = $response->getObject();
        $_html = "<script>	var simpleUpdateConfig = " . $modx->toJSON($resObj) . ";</script>";
        $modx->controller->addHtml($_html);
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
        $modx->controller->addLexiconTopic(\'simpleupdater:default\');
        $modx->controller->addCss($modx->getOption(\'assets_url\').\'components/simpleupdater/css/mgr/main.css\');
        $modx->controller->addJavascript($modx->getOption(\'assets_url\').\'components/simpleupdater/js/mgr/widgets/update.button.js\');
        $response = $modx->runProcessor(\'mgr/version/check\', array(), array(\'processors_path\' => $modx->getOption(\'core_path\') . \'components/simpleupdater/processors/\'));
        $resObj = $response->getObject();
        $_html = "<script>	var simpleUpdateConfig = " . $modx->toJSON($resObj) . ";</script>";
        $modx->controller->addHtml($_html);
        break;
}',
    ),
  ),
  'e601f48406f215f11a519e020966b2d5' => 
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