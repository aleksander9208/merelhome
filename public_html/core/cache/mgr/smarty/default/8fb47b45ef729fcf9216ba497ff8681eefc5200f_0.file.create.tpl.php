<?php
/* Smarty version 3.1.31, created on 2020-02-21 16:53:59
  from "/home/o/ostrou0v/merelhome.com/public_html/manager/templates/default/resource/staticresource/create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e4fe0f7b6c3f6_75680035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fb47b45ef729fcf9216ba497ff8681eefc5200f' => 
    array (
      0 => '/home/o/ostrou0v/merelhome.com/public_html/manager/templates/default/resource/staticresource/create.tpl',
      1 => 1541934605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4fe0f7b6c3f6_75680035 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
