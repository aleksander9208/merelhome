<?php return array (
  '726e42f119e85424b49de90a11beabb7' => 
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
  'df4baa407b6085ec34d1b5153de718cc' => 
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
  '1d611309da589c27b6810f1c02ed55a3' => 
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
  '4251ff4751a40ba9b18cb5d347738313' => 
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
  'bc7a650c983c13df11daa46ad8f90d3a' => 
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
  'ddc85648df5c14ca07aa626d7b961e77' => 
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