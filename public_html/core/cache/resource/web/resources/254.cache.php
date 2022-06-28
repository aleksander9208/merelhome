<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 254,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Производство',
    'longtitle' => '',
    'description' => '',
    'alias' => 'proizvodstvo',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '{extends \'file:templates/index.tpl\'}

{block \'content\'}
    <div class="portfolio-header">
    	<span class="portfolio-pagetitle">
    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
    	</span>
    	{\'pdoCrumbs\' | snippet : [
           \'showHome\' => 1,
        ]}
    </div>
    <div class="container">
       
       <div class="portfolio-production">
           <div class="uk-child-width-1-3@m" uk-grid>
               {\'ms2Gallery\' | snippet : [
                    \'tplRow\' => \'@FILE chunks/resources/Portfolio.row.tpl\',
                    \'tplOuter\' => \'@FILE chunks/resources/Portfolio.outer.tpl\',
                    \'frontend_css\' => \'0\',
                    \'frontend_js\' => \'0\'
                ]}
            </div>
       </div>
    </div>

{/block}

',
    'richtext' => 0,
    'template' => 1,
    'menuindex' => 12,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1554014436,
    'editedby' => 1,
    'editedon' => 1580395544,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1554014400,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'proizvodstvo',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => '{"ms2gallery":{"media_source":"4"}}',
    'seo.description' => 
    array (
      0 => 'seo.description',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'textarea',
    ),
    'seo.keywords' => 
    array (
      0 => 'seo.keywords',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'seo.title' => 
    array (
      0 => 'seo.title',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'image' => 
    array (
      0 => 'image',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '{include \'file:templates/index.tpl\'}',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[pdoMenu?showLog=``&fastMode=``&level=`1`&parents=`0`&displayStart=``&resources=``&templates=``&context=``&cache=``&cacheTime=`3600`&cacheAnonymous=``&plPrefix=`wf.`&showHidden=``&showUnpublished=``&showDeleted=``&previewUnpublished=``&hideSubMenus=``&useWeblinkUrl=`1`&sortdir=`ASC`&sortby=`menuindex`&limit=`0`&offset=`0`&rowIdPrefix=``&firstClass=`first`&lastClass=`last`&hereClass=`active`&parentClass=``&rowClass=``&outerClass=`header-menu`&innerClass=``&levelClass=``&selfClass=``&webLinkClass=``&tplOuter=`@INLINE <ul[[+classes]]>[[+wrapper]]</ul>`&tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`&tplParentRow=``&tplParentRowHere=``&tplHere=``&tplInner=``&tplInnerRow=``&tplInnerHere=``&tplParentRowActive=``&tplCategoryFolder=``&tplStart=`@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]`&checkPermissions=``&hereId=``&where=``&select=``&scheme=``&toPlaceholder=``&countChildren=``]]' => '<ul class="header-menu"><li class="first"><a href="/" >Merel\' home</a></li><li><a href="katalog/" >Каталог</a></li><li><a href="dostaka-i-oplata" >Доставка и оплата</a></li><li><a href="dizajneram" >Дизайнерам</a></li><li><a href="portfolio" >Портфолио</a></li><li><a href="blog/" >Блог</a></li><li class="last"><a href="kontaktyi" >Контакты</a></li></ul>',
    '[[pdoCrumbs?showLog=``&fastMode=``&from=`0`&to=``&customParents=``&limit=`10`&exclude=``&outputSeparator=`
`&toPlaceholder=``&includeTVs=``&prepareTVs=`1`&processTVs=``&tvPrefix=`tv.`&where=``&showUnpublished=``&showDeleted=``&showHidden=`1`&hideContainers=``&tpl=`@INLINE <li class="breadcrumb-item"><a href="[[+link]]">[[+menutitle]]</a></li>`&tplCurrent=`@INLINE <li class="breadcrumb-item active">[[+menutitle]]</li>`&tplMax=`@INLINE <li class="breadcrumb-item disabled">&nbsp;...&nbsp;</li>`&tplHome=``&tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`&wrapIfEmpty=``&showCurrent=`1`&showHome=`1`&showAtHome=`1`&hideSingle=``&direction=`ltr`&scheme=``&useWeblinkUrl=`1`]]' => '<ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Merel\' home</a></li>
<li class="breadcrumb-item active">Производство</li></ol>',
    '[[ms2Gallery?parents=``&resources=``&showLog=``&toPlaceholder=``&tplRow=`@FILE chunks/resources/Portfolio.row.tpl`&tplOuter=`@FILE chunks/resources/Portfolio.outer.tpl`&tplEmpty=`tpl.ms2Gallery.empty`&tplSingle=``&limit=`0`&offset=`0`&where=``&filetype=``&showInactive=``&sortby=`rank`&sortdir=`ASC`&frontend_css=`0`&frontend_js=`0`&tags=``&tagsVar=``&getTags=``&tagsSeparator=`,`]]' => '<div>
    <a href="/assets/images/resources/254/1.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/1.jpg" class="js-small-thumb" title="1">
        <img src="/assets/images/resources/254/535x350/1.jpg" alt="" title="1">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/9unly43pt18.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/9unly43pt18.jpg" class="js-small-thumb" title="9unlY43pt18">
        <img src="/assets/images/resources/254/535x350/9unly43pt18.jpg" alt="" title="9unlY43pt18">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/onjozr0xomi.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/onjozr0xomi.jpg" class="js-small-thumb" title="oNjozR0XoMI">
        <img src="/assets/images/resources/254/535x350/onjozr0xomi.jpg" alt="" title="oNjozR0XoMI">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/ujdlfekqi7s.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/ujdlfekqi7s.jpg" class="js-small-thumb" title="UJdlfEkQi7s">
        <img src="/assets/images/resources/254/535x350/ujdlfekqi7s.jpg" alt="" title="UJdlfEkQi7s">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/odnzthmezsk.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/odnzthmezsk.jpg" class="js-small-thumb" title="ODnztHmezsk">
        <img src="/assets/images/resources/254/535x350/odnzthmezsk.jpg" alt="" title="ODnztHmezsk">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/fkqhr9h4qe8.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/fkqhr9h4qe8.jpg" class="js-small-thumb" title="FkqHr9h4qE8">
        <img src="/assets/images/resources/254/535x350/fkqhr9h4qe8.jpg" alt="" title="FkqHr9h4qE8">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/bvnccakygp0.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/bvnccakygp0.jpg" class="js-small-thumb" title="bvnCcaKYGp0">
        <img src="/assets/images/resources/254/535x350/bvnccakygp0.jpg" alt="" title="bvnCcaKYGp0">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/hiil1mtpcjw.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/hiil1mtpcjw.jpg" class="js-small-thumb" title="hIIl1MtPcJw">
        <img src="/assets/images/resources/254/535x350/hiil1mtpcjw.jpg" alt="" title="hIIl1MtPcJw">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mrcdh8jz5ce.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mrcdh8jz5ce.jpg" class="js-small-thumb" title="MRcDH8jz5cE">
        <img src="/assets/images/resources/254/535x350/mrcdh8jz5ce.jpg" alt="" title="MRcDH8jz5cE">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/myrts3azunc.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/myrts3azunc.jpg" class="js-small-thumb" title="myRtS3aZUNc">
        <img src="/assets/images/resources/254/535x350/myrts3azunc.jpg" alt="" title="myRtS3aZUNc">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/pq86kzyecb0.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/pq86kzyecb0.jpg" class="js-small-thumb" title="pq86KzYECB0">
        <img src="/assets/images/resources/254/535x350/pq86kzyecb0.jpg" alt="" title="pq86KzYECB0">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/qipjhodefxa.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/qipjhodefxa.jpg" class="js-small-thumb" title="qIPJhODefxA">
        <img src="/assets/images/resources/254/535x350/qipjhodefxa.jpg" alt="" title="qIPJhODefxA">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/szkripfpkb4.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/szkripfpkb4.jpg" class="js-small-thumb" title="szKRipFpKB4">
        <img src="/assets/images/resources/254/535x350/szkripfpkb4.jpg" alt="" title="szKRipFpKB4">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/vtltybhlhly.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/vtltybhlhly.jpg" class="js-small-thumb" title="VtLTYBHLhLY">
        <img src="/assets/images/resources/254/535x350/vtltybhlhly.jpg" alt="" title="VtLTYBHLhLY">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/zhpx2ciebb8.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/zhpx2ciebb8.jpg" class="js-small-thumb" title="zhPx2ciEbb8">
        <img src="/assets/images/resources/254/535x350/zhpx2ciebb8.jpg" alt="" title="zhPx2ciEbb8">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/2-lht2jyn5a.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/2-lht2jyn5a.jpg" class="js-small-thumb" title="2_LhT2JYN5A">
        <img src="/assets/images/resources/254/535x350/2-lht2jyn5a.jpg" alt="" title="2_LhT2JYN5A">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/5fyaeo376ze.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/5fyaeo376ze.jpg" class="js-small-thumb" title="5fyaEO376ZE">
        <img src="/assets/images/resources/254/535x350/5fyaeo376ze.jpg" alt="" title="5fyaEO376ZE">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/re47ov8lkk0.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/re47ov8lkk0.jpg" class="js-small-thumb" title="Re47OV8LkK0">
        <img src="/assets/images/resources/254/535x350/re47ov8lkk0.jpg" alt="" title="Re47OV8LkK0">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/97-imne4shm.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/97-imne4shm.jpg" class="js-small-thumb" title="97_IMNE4sHM">
        <img src="/assets/images/resources/254/535x350/97-imne4shm.jpg" alt="" title="97_IMNE4sHM">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mieu25w-35s.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mieu25w-35s.jpg" class="js-small-thumb" title="mieU25w_35s">
        <img src="/assets/images/resources/254/535x350/mieu25w-35s.jpg" alt="" title="mieU25w_35s">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/bgbs-da6cj4.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/bgbs-da6cj4.jpg" class="js-small-thumb" title="BgbS_da6CJ4">
        <img src="/assets/images/resources/254/535x350/bgbs-da6cj4.jpg" alt="" title="BgbS_da6CJ4">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/c7vl6f-3wu.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/c7vl6f-3wu.jpg" class="js-small-thumb" title="-C7VL6f-3WU">
        <img src="/assets/images/resources/254/535x350/c7vl6f-3wu.jpg" alt="" title="-C7VL6f-3WU">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/ezwd0ckf0po.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/ezwd0ckf0po.jpg" class="js-small-thumb" title="ezwD0ckf0po">
        <img src="/assets/images/resources/254/535x350/ezwd0ckf0po.jpg" alt="" title="ezwD0ckf0po">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/ntpzdspsppw.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/ntpzdspsppw.jpg" class="js-small-thumb" title="nTPzdsPsppw">
        <img src="/assets/images/resources/254/535x350/ntpzdspsppw.jpg" alt="" title="nTPzdsPsppw">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/u1zuoihuqfu.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/u1zuoihuqfu.jpg" class="js-small-thumb" title="u1ZuOIhUqfU">
        <img src="/assets/images/resources/254/535x350/u1zuoihuqfu.jpg" alt="" title="u1ZuOIhUqfU">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/umi-iq8ja94.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/umi-iq8ja94.jpg" class="js-small-thumb" title="Umi-IQ8Ja94">
        <img src="/assets/images/resources/254/535x350/umi-iq8ja94.jpg" alt="" title="Umi-IQ8Ja94">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/vtnx1gn30po.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/vtnx1gn30po.jpg" class="js-small-thumb" title="VtNx1gN30Po">
        <img src="/assets/images/resources/254/535x350/vtnx1gn30po.jpg" alt="" title="VtNx1gN30Po">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/b2pw5ufqfg.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/b2pw5ufqfg.jpg" class="js-small-thumb" title="_b2PW5UFQfg">
        <img src="/assets/images/resources/254/535x350/b2pw5ufqfg.jpg" alt="" title="_b2PW5UFQfg">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/1eko9qe-zwq.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/1eko9qe-zwq.jpg" class="js-small-thumb" title="1eKo9Qe_ZWQ">
        <img src="/assets/images/resources/254/535x350/1eko9qe-zwq.jpg" alt="" title="1eKo9Qe_ZWQ">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/1t4plvxrqgs.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/1t4plvxrqgs.jpg" class="js-small-thumb" title="1T4plvxrQGs">
        <img src="/assets/images/resources/254/535x350/1t4plvxrqgs.jpg" alt="" title="1T4plvxrQGs">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/biiiz3lszfc.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/biiiz3lszfc.jpg" class="js-small-thumb" title="biiiz3Lszfc">
        <img src="/assets/images/resources/254/535x350/biiiz3lszfc.jpg" alt="" title="biiiz3Lszfc">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/iwvrzfzbbh4.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/iwvrzfzbbh4.jpg" class="js-small-thumb" title="IwvrZFzBBH4">
        <img src="/assets/images/resources/254/535x350/iwvrzfzbbh4.jpg" alt="" title="IwvrZFzBBH4">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/pmm1idyfdeg.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/pmm1idyfdeg.jpg" class="js-small-thumb" title="Pmm1IDyFdEg">
        <img src="/assets/images/resources/254/535x350/pmm1idyfdeg.jpg" alt="" title="Pmm1IDyFdEg">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/rcotjwqqgem.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/rcotjwqqgem.jpg" class="js-small-thumb" title="RcoTjwQqgEM">
        <img src="/assets/images/resources/254/535x350/rcotjwqqgem.jpg" alt="" title="RcoTjwQqgEM">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/rg8j5ehbawg.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/rg8j5ehbawg.jpg" class="js-small-thumb" title="Rg8J5EHbaWg">
        <img src="/assets/images/resources/254/535x350/rg8j5ehbawg.jpg" alt="" title="Rg8J5EHbaWg">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/sqzapexjuvs.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/sqzapexjuvs.jpg" class="js-small-thumb" title="SqzapexJUvs">
        <img src="/assets/images/resources/254/535x350/sqzapexjuvs.jpg" alt="" title="SqzapexJUvs">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/xazsysuqd8o.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/xazsysuqd8o.jpg" class="js-small-thumb" title="XAzsYSUQd8o">
        <img src="/assets/images/resources/254/535x350/xazsysuqd8o.jpg" alt="" title="XAzsYSUQd8o">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/y5baaoypzyk.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/y5baaoypzyk.jpg" class="js-small-thumb" title="y5BAAoYPzyk">
        <img src="/assets/images/resources/254/535x350/y5baaoypzyk.jpg" alt="" title="y5BAAoYPzyk">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/aiclai2zyo4.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/aiclai2zyo4.jpg" class="js-small-thumb" title="aIclAi2ZyO4">
        <img src="/assets/images/resources/254/535x350/aiclai2zyo4.jpg" alt="" title="aIclAi2ZyO4">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/vqm1toynniw.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/vqm1toynniw.jpg" class="js-small-thumb" title="VQM1ToynnIw">
        <img src="/assets/images/resources/254/535x350/vqm1toynniw.jpg" alt="" title="VQM1ToynnIw">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/cni-td-0ege.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/cni-td-0ege.jpg" class="js-small-thumb" title="CNI_Td_0EgE">
        <img src="/assets/images/resources/254/535x350/cni-td-0ege.jpg" alt="" title="CNI_Td_0EgE">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/etzlzxhn94o.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/etzlzxhn94o.jpg" class="js-small-thumb" title="EtZLZXhn94o">
        <img src="/assets/images/resources/254/535x350/etzlzxhn94o.jpg" alt="" title="EtZLZXhn94o">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/pgifjtemwge.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/pgifjtemwge.jpg" class="js-small-thumb" title="PGifjtEmwGE">
        <img src="/assets/images/resources/254/535x350/pgifjtemwge.jpg" alt="" title="PGifjtEmwGE">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/ge8jvbokoqm.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/ge8jvbokoqm.jpg" class="js-small-thumb" title="gE8jVBoKOqM">
        <img src="/assets/images/resources/254/535x350/ge8jvbokoqm.jpg" alt="" title="gE8jVBoKOqM">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mfh1yivr4ds.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mfh1yivr4ds.jpg" class="js-small-thumb" title="MFH1YIvR4ds">
        <img src="/assets/images/resources/254/535x350/mfh1yivr4ds.jpg" alt="" title="MFH1YIvR4ds">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mvs74yjijee.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mvs74yjijee.jpg" class="js-small-thumb" title="mVs74YjijEE">
        <img src="/assets/images/resources/254/535x350/mvs74yjijee.jpg" alt="" title="mVs74YjijEE">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/4gbjliead-q.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/4gbjliead-q.jpg" class="js-small-thumb" title="4gbjLiEAD-Q">
        <img src="/assets/images/resources/254/535x350/4gbjliead-q.jpg" alt="" title="4gbjLiEAD-Q">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/91lepnmiets.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/91lepnmiets.jpg" class="js-small-thumb" title="91LEpNMieTs">
        <img src="/assets/images/resources/254/535x350/91lepnmiets.jpg" alt="" title="91LEpNMieTs">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/alqdajwf97q.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/alqdajwf97q.jpg" class="js-small-thumb" title="aLQdaJWF97Q">
        <img src="/assets/images/resources/254/535x350/alqdajwf97q.jpg" alt="" title="aLQdaJWF97Q">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/emjkisjvlla.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/emjkisjvlla.jpg" class="js-small-thumb" title="emjKISjvLLA">
        <img src="/assets/images/resources/254/535x350/emjkisjvlla.jpg" alt="" title="emjKISjvLLA">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/img-4768.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/img-4768.jpg" class="js-small-thumb" title="IMG_4768">
        <img src="/assets/images/resources/254/535x350/img-4768.jpg" alt="" title="IMG_4768">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/img-8001.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/img-8001.jpg" class="js-small-thumb" title="IMG_8001">
        <img src="/assets/images/resources/254/535x350/img-8001.jpg" alt="" title="IMG_8001">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580319561771-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580319561771-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580319561771 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580319561771-—-kopiya.jpg" alt="" title="mmexport1580319561771 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580319568687-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580319568687-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580319568687 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580319568687-—-kopiya.jpg" alt="" title="mmexport1580319568687 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580319590541-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580319590541-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580319590541 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580319590541-—-kopiya.jpg" alt="" title="mmexport1580319590541 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330034392-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330034392-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330034392 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330034392-—-kopiya.jpg" alt="" title="mmexport1580330034392 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330043152-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330043152-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330043152 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330043152-—-kopiya.jpg" alt="" title="mmexport1580330043152 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330081813-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330081813-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330081813 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330081813-—-kopiya.jpg" alt="" title="mmexport1580330081813 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330092767-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330092767-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330092767 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330092767-—-kopiya.jpg" alt="" title="mmexport1580330092767 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330101427-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330101427-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330101427 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330101427-—-kopiya.jpg" alt="" title="mmexport1580330101427 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330121806-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330121806-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330121806 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330121806-—-kopiya.jpg" alt="" title="mmexport1580330121806 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330363679-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330363679-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330363679 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330363679-—-kopiya.jpg" alt="" title="mmexport1580330363679 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330369748-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330369748-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330369748 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330369748-—-kopiya.jpg" alt="" title="mmexport1580330369748 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330376999-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330376999-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330376999 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330376999-—-kopiya.jpg" alt="" title="mmexport1580330376999 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330383568-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330383568-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330383568 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330383568-—-kopiya.jpg" alt="" title="mmexport1580330383568 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330389940-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330389940-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330389940 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330389940-—-kopiya.jpg" alt="" title="mmexport1580330389940 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330466914-—-kopiya.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330466914-—-kopiya.jpg" class="js-small-thumb" title="mmexport1580330466914 — копия">
        <img src="/assets/images/resources/254/535x350/mmexport1580330466914-—-kopiya.jpg" alt="" title="mmexport1580330466914 — копия">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330473312.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330473312.jpg" class="js-small-thumb" title="mmexport1580330473312">
        <img src="/assets/images/resources/254/535x350/mmexport1580330473312.jpg" alt="" title="mmexport1580330473312">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330480561.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330480561.jpg" class="js-small-thumb" title="mmexport1580330480561">
        <img src="/assets/images/resources/254/535x350/mmexport1580330480561.jpg" alt="" title="mmexport1580330480561">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330487252.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330487252.jpg" class="js-small-thumb" title="mmexport1580330487252">
        <img src="/assets/images/resources/254/535x350/mmexport1580330487252.jpg" alt="" title="mmexport1580330487252">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580330494038.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580330494038.jpg" class="js-small-thumb" title="mmexport1580330494038">
        <img src="/assets/images/resources/254/535x350/mmexport1580330494038.jpg" alt="" title="mmexport1580330494038">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580363327322.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580363327322.jpg" class="js-small-thumb" title="mmexport1580363327322">
        <img src="/assets/images/resources/254/535x350/mmexport1580363327322.jpg" alt="" title="mmexport1580363327322">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580363346367.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580363346367.jpg" class="js-small-thumb" title="mmexport1580363346367">
        <img src="/assets/images/resources/254/535x350/mmexport1580363346367.jpg" alt="" title="mmexport1580363346367">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580363355746.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580363355746.jpg" class="js-small-thumb" title="mmexport1580363355746">
        <img src="/assets/images/resources/254/535x350/mmexport1580363355746.jpg" alt="" title="mmexport1580363355746">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580363424366.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580363424366.jpg" class="js-small-thumb" title="mmexport1580363424366">
        <img src="/assets/images/resources/254/535x350/mmexport1580363424366.jpg" alt="" title="mmexport1580363424366">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580363436706.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580363436706.jpg" class="js-small-thumb" title="mmexport1580363436706">
        <img src="/assets/images/resources/254/535x350/mmexport1580363436706.jpg" alt="" title="mmexport1580363436706">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580363493390.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580363493390.jpg" class="js-small-thumb" title="mmexport1580363493390">
        <img src="/assets/images/resources/254/535x350/mmexport1580363493390.jpg" alt="" title="mmexport1580363493390">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580363500727.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580363500727.jpg" class="js-small-thumb" title="mmexport1580363500727">
        <img src="/assets/images/resources/254/535x350/mmexport1580363500727.jpg" alt="" title="mmexport1580363500727">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580329669625.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580329669625.jpg" class="js-small-thumb" title="mmexport1580329669625">
        <img src="/assets/images/resources/254/535x350/mmexport1580329669625.jpg" alt="" title="mmexport1580329669625">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580329686722.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580329686722.jpg" class="js-small-thumb" title="mmexport1580329686722">
        <img src="/assets/images/resources/254/535x350/mmexport1580329686722.jpg" alt="" title="mmexport1580329686722">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580329693175.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580329693175.jpg" class="js-small-thumb" title="mmexport1580329693175">
        <img src="/assets/images/resources/254/535x350/mmexport1580329693175.jpg" alt="" title="mmexport1580329693175">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580329739831.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580329739831.jpg" class="js-small-thumb" title="mmexport1580329739831">
        <img src="/assets/images/resources/254/535x350/mmexport1580329739831.jpg" alt="" title="mmexport1580329739831">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580329775818.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580329775818.jpg" class="js-small-thumb" title="mmexport1580329775818">
        <img src="/assets/images/resources/254/535x350/mmexport1580329775818.jpg" alt="" title="mmexport1580329775818">
    </a>
</div>
<div>
    <a href="/assets/images/resources/254/mmexport1580329789110.jpg" rel="gallery-254" data-image="/assets/images/resources/254/570x450/mmexport1580329789110.jpg" class="js-small-thumb" title="mmexport1580329789110">
        <img src="/assets/images/resources/254/535x350/mmexport1580329789110.jpg" alt="" title="mmexport1580329789110">
    </a>
</div>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
      'seo.description' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'textarea',
          'name' => 'seo.description',
          'caption' => 'Описание',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'seo.keywords' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'seo.keywords',
          'caption' => 'Ключевые слова',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'seo.title' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'seo.title',
          'caption' => 'Заголовок',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'image' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'image',
          'caption' => 'Изображение',
          'description' => '',
          'editor_type' => 0,
          'category' => 14,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);