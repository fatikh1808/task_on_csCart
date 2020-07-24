<?php /* Smarty version Smarty-3.1.21, created on 2020-07-24 07:08:27
         compiled from "C:\xampp\htdocs\task_on_csCart\design\themes\responsive\templates\addons\my_design\hooks\products\old_price.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19134596665f1a5e49ec0229-70698609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4800e8af0300adb709ee6294cfab7b9e0558af39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\themes\\responsive\\templates\\addons\\my_design\\hooks\\products\\old_price.override.tpl',
      1 => 1595563699,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19134596665f1a5e49ec0229-70698609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1a5e4a09e9d3_28325068',
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'details_page' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1a5e4a09e9d3_28325068')) {function content_5f1a5e4a09e9d3_28325068($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('old_price','old_price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
    <span class="ty-list-price ty-nowrap" id="line_old_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("old_price");?>
: <?php }?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['original_price'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['base_price'] : $tmp),'span_id'=>"old_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0);?>
</span></span>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['list_discount']) {?>
    <span class="ty-list-price ty-nowrap" id="line_list_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?><span class="list-price-label"></span> <?php }?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_price'],'span_id'=>"list_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0);?>
</span></span>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_design/hooks/products/old_price.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_design/hooks/products/old_price.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
    <span class="ty-list-price ty-nowrap" id="line_old_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("old_price");?>
: <?php }?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['original_price'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['base_price'] : $tmp),'span_id'=>"old_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0);?>
</span></span>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['list_discount']) {?>
    <span class="ty-list-price ty-nowrap" id="line_list_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?><span class="list-price-label"></span> <?php }?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_price'],'span_id'=>"list_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0);?>
</span></span>
<?php }
}?><?php }} ?>
