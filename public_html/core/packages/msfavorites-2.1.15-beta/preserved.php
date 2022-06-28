<?php return array (
  '2a1565a8f01b996eb827b44e634d6037' => 
  array (
    'criteria' => 
    array (
      'name' => 'msfavorites',
    ),
    'object' => 
    array (
      'name' => 'msfavorites',
      'path' => '{core_path}components/msfavorites/',
      'assets_path' => '',
    ),
  ),
  '2ae93146714d9e52077bee9706952e75' => 
  array (
    'criteria' => 
    array (
      'key' => 'msfavorites_front_css',
    ),
    'object' => 
    array (
      'key' => 'msfavorites_front_css',
      'value' => '[[+assetsUrl]]css/default.min.css',
      'xtype' => 'textfield',
      'namespace' => 'msfavorites',
      'area' => 'msfavorites_main',
      'editedon' => NULL,
    ),
  ),
  '98219280b2de52669f7b976cb67f43d5' => 
  array (
    'criteria' => 
    array (
      'key' => 'msfavorites_front_js',
    ),
    'object' => 
    array (
      'key' => 'msfavorites_front_js',
      'value' => '[[+assetsUrl]]js/default.min.js',
      'xtype' => 'textfield',
      'namespace' => 'msfavorites',
      'area' => 'msfavorites_main',
      'editedon' => NULL,
    ),
  ),
  'cb423ff9d945c0fb0a93b67132b9c8e7' => 
  array (
    'criteria' => 
    array (
      'key' => 'msfavorites_clear_temporary',
    ),
    'object' => 
    array (
      'key' => 'msfavorites_clear_temporary',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'msfavorites',
      'area' => 'msfavorites_main',
      'editedon' => NULL,
    ),
  ),
  '50c51284c1551fe916e6a04b693cd4e0' => 
  array (
    'criteria' => 
    array (
      'key' => 'msfavorites_time_limit',
    ),
    'object' => 
    array (
      'key' => 'msfavorites_time_limit',
      'value' => '2',
      'xtype' => 'textfield',
      'namespace' => 'msfavorites',
      'area' => 'msfavorites_main',
      'editedon' => '2019-02-03 19:33:04',
    ),
  ),
  '87b4e390db6f5162e18ea0f499ebf582' => 
  array (
    'criteria' => 
    array (
      'name' => 'msFavoritesOnBeforeProcessFavorites',
    ),
    'object' => 
    array (
      'name' => 'msFavoritesOnBeforeProcessFavorites',
      'service' => 6,
      'groupname' => 'msFavorites',
    ),
  ),
  '733a15f0805db776db2ff60102cbaf13' => 
  array (
    'criteria' => 
    array (
      'name' => 'msFavoritesOnProcessFavorites',
    ),
    'object' => 
    array (
      'name' => 'msFavoritesOnProcessFavorites',
      'service' => 6,
      'groupname' => 'msFavorites',
    ),
  ),
  'bc97ae1e7bbf18235eb65afd79bd2cd7' => 
  array (
    'criteria' => 
    array (
      'category' => 'msFavorites',
    ),
    'object' => 
    array (
      'id' => 17,
      'parent' => 0,
      'category' => 'msFavorites',
      'rank' => 0,
    ),
  ),
  'd1875006ede10e2b1c327e4842de8c4e' => 
  array (
    'criteria' => 
    array (
      'name' => 'msFavorites.initialize',
    ),
    'object' => 
    array (
      'id' => 56,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'msFavorites.initialize',
      'description' => '',
      'editor_type' => 0,
      'category' => 17,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
$corePath = $modx->getOption(\'msfavorites_core_path\', null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/msfavorites/\');
/** @var msFavorites $msFavorites */
$msFavorites = $modx->getService(\'msfavorites\', \'msFavorites\', $corePath . \'model/msfavorites/\',
    array(\'core_path\' => $corePath));
if (!$msFavorites OR !($msFavorites instanceof msFavorites)) {
    return \'Could not load msFavorites class!\';
}

$msFavorites->initialize($modx->context->key, $scriptProperties);',
      'locked' => 0,
      'properties' => 'a:3:{s:8:"frontCss";a:7:{s:4:"name";s:8:"frontCss";s:4:"desc";s:25:"msfavorites_prop_frontCss";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:22:"msfavorites:properties";s:4:"area";s:0:"";}s:7:"frontJs";a:7:{s:4:"name";s:7:"frontJs";s:4:"desc";s:24:"msfavorites_prop_frontJs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:22:"msfavorites:properties";s:4:"area";s:0:"";}s:9:"actionUrl";a:7:{s:4:"name";s:9:"actionUrl";s:4:"desc";s:26:"msfavorites_prop_actionUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"[[+assetsUrl]]action.php";s:7:"lexicon";s:22:"msfavorites:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/msfavorites/elements/snippets/snippet.msfavorites.initialize.php',
      'content' => '/** @var array $scriptProperties */
$corePath = $modx->getOption(\'msfavorites_core_path\', null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/msfavorites/\');
/** @var msFavorites $msFavorites */
$msFavorites = $modx->getService(\'msfavorites\', \'msFavorites\', $corePath . \'model/msfavorites/\',
    array(\'core_path\' => $corePath));
if (!$msFavorites OR !($msFavorites instanceof msFavorites)) {
    return \'Could not load msFavorites class!\';
}

$msFavorites->initialize($modx->context->key, $scriptProperties);',
    ),
  ),
  '1b67c3b1f1ddcb88a1d3a7554401ca88' => 
  array (
    'criteria' => 
    array (
      'name' => 'msFavorites.ids',
    ),
    'object' => 
    array (
      'id' => 57,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'msFavorites.ids',
      'description' => '',
      'editor_type' => 0,
      'category' => 17,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
$corePath = $modx->getOption(\'msfavorites_core_path\', null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/msfavorites/\');
/** @var msFavorites $msFavorites */
$msFavorites = $modx->getService(\'msfavorites\', \'msFavorites\', $corePath . \'model/msfavorites/\',
    array(\'core_path\' => $corePath));
if (!$msFavorites OR !($msFavorites instanceof msFavorites)) {
    return \'Could not load msFavorites class!\';
}

$list = $modx->getOption(\'list\', $scriptProperties, \'default\', true);
$uid = $modx->getOption(\'uid\', $scriptProperties, $modx->user->id, true);
$sortby = $modx->getOption(\'sortby\', $scriptProperties);
if (empty($uid)) {
    $uid = session_id();
}

$query = array(
    \'list\' => $list,
    \'uid\'  => $uid,
);

$data = $msFavorites->getFavoritesOutput($query, true, $sortby);
$msFavorites->setPlaceholders($data);

$data = @$data[\'list\'][$list];
if (empty($data)) {
    $data = \'-0\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $data);

    return \'\';
}

return $data;',
      'locked' => 0,
      'properties' => 'a:3:{s:4:"list";a:7:{s:4:"name";s:4:"list";s:4:"desc";s:21:"msfavorites_prop_list";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:22:"msfavorites:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:23:"msfavorites_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"{"timestamp": "ASC"}";s:7:"lexicon";s:22:"msfavorites:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:30:"msfavorites_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:22:"msfavorites:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/msfavorites/elements/snippets/snippet.msfavorites.ids.php',
      'content' => '/** @var array $scriptProperties */
$corePath = $modx->getOption(\'msfavorites_core_path\', null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/msfavorites/\');
/** @var msFavorites $msFavorites */
$msFavorites = $modx->getService(\'msfavorites\', \'msFavorites\', $corePath . \'model/msfavorites/\',
    array(\'core_path\' => $corePath));
if (!$msFavorites OR !($msFavorites instanceof msFavorites)) {
    return \'Could not load msFavorites class!\';
}

$list = $modx->getOption(\'list\', $scriptProperties, \'default\', true);
$uid = $modx->getOption(\'uid\', $scriptProperties, $modx->user->id, true);
$sortby = $modx->getOption(\'sortby\', $scriptProperties);
if (empty($uid)) {
    $uid = session_id();
}

$query = array(
    \'list\' => $list,
    \'uid\'  => $uid,
);

$data = $msFavorites->getFavoritesOutput($query, true, $sortby);
$msFavorites->setPlaceholders($data);

$data = @$data[\'list\'][$list];
if (empty($data)) {
    $data = \'-0\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $data);

    return \'\';
}

return $data;',
    ),
  ),
  '1f7520396a14f6c9410d7706723da083' => 
  array (
    'criteria' => 
    array (
      'name' => 'msFavorites',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'msFavorites',
      'description' => '',
      'editor_type' => 0,
      'category' => 17,
      'cache_type' => 0,
      'plugincode' => '/** @var array $scriptProperties */
$corePath = $modx->getOption(\'msfavorites_core_path\', null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/msfavorites/\');
/** @var msFavorites $msFavorites */
$msFavorites = $modx->getService(\'msfavorites\', \'msFavorites\', $corePath . \'model/msfavorites/\',
    array(\'core_path\' => $corePath));
if (!$msFavorites OR !($msFavorites instanceof msFavorites)) {
    return false;
}

$className = \'msFavorites\' . $modx->event->name;
$modx->loadClass(\'msFavoritesPlugin\', $msFavorites->getOption(\'modelPath\') . \'msfavorites/systems/\', true,
    true);
$modx->loadClass($className, $msFavorites->getOption(\'modelPath\') . \'msfavorites/systems/\', true, true);
if (class_exists($className)) {
    /** @var msFavoritesPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}
return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/msfavorites/elements/plugins/plugin.msfavorites.php',
      'content' => '/** @var array $scriptProperties */
$corePath = $modx->getOption(\'msfavorites_core_path\', null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/msfavorites/\');
/** @var msFavorites $msFavorites */
$msFavorites = $modx->getService(\'msfavorites\', \'msFavorites\', $corePath . \'model/msfavorites/\',
    array(\'core_path\' => $corePath));
if (!$msFavorites OR !($msFavorites instanceof msFavorites)) {
    return false;
}

$className = \'msFavorites\' . $modx->event->name;
$modx->loadClass(\'msFavoritesPlugin\', $msFavorites->getOption(\'modelPath\') . \'msfavorites/systems/\', true,
    true);
$modx->loadClass($className, $msFavorites->getOption(\'modelPath\') . \'msfavorites/systems/\', true, true);
if (class_exists($className)) {
    /** @var msFavoritesPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}
return;',
    ),
  ),
  '4440e1f44188c51bebb617f5bbb9f3a7' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 14,
      'event' => 'OnEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 14,
      'event' => 'OnEmptyTrash',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  'c7989090acc9cb05f5a64d6b62dbbca7' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 14,
      'event' => 'OnUserRemove',
    ),
    'object' => 
    array (
      'pluginid' => 14,
      'event' => 'OnUserRemove',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '3b3b6526694c9b64dbae30f77903dd6f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 14,
      'event' => 'OnCacheUpdate',
    ),
    'object' => 
    array (
      'pluginid' => 14,
      'event' => 'OnCacheUpdate',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
);