{set $id = $_modx->resource.id}
<meta charset="utf-8">
<title>{$_modx->resource['seo.title'] ?: $_modx->resource.longtitle ?: $_modx->resource.pagetitle}</title>
<meta name="keywords" content="{if $id == '1'}{$_modx->resource.longtitle}{else}{$_modx->resource.pagetitle} - Merel' home{/if}">
<meta name="description" content="{if $id == '1'}Мебельная компания {$_modx->resource.pagetitle} в Москве. Высочайшее качество, разумные цены, собственное производство. Звоните +7(800)550-92-62{else}{$_modx->resource.pagetitle} в Москве. Высочайшее качество, разумные цены, собственное производство. Звоните +7(800)550-92-62{/if}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<base href="[[++site_url]]">
<meta name="theme-color" content="#333366">
<link ref="canonical" href="{'site_url' | config}">

<meta name="yandex-verification" content="8a0730cedd78f504" />


<meta property='og:description' content='
{if $id == '1'}
    Мебельная компания Merel home в Москве. Высочайшее качество, разумные цены, собственное производство. Звоните +7(800)550-92-62
{else}
{$_modx->resource.pagetitle} в Москве. Высочайшее качество, разумные цены, собственное производство. Звоните +7(800)550-92-62
{/if}
'>
<meta property='og:image' content='https://merelhome.com/assets/components/app/web/img/logo.png' />
<meta property="og:title" content="{$_modx->resource['seo.title'] ?: $_modx->resource.longtitle ?: $_modx->resource.pagetitle}">
<meta property="og:type" content="website" />
<meta property="og:url" content="{'site_url' | config}" />
<meta property="og:site_name" content='Мебель английского бренда "Merel home".' />
<meta property="og:locale" content="ru_RU" />


{($.assets_url ~ 'web/main.css?v=' ~ $.assets_version) | cssToHead}
{($.assets_url ~ 'web/main.js?v=' ~ $.assets_version) | jsToBottom : false}