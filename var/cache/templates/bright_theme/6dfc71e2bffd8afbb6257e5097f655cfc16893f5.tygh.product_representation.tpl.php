<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:45:59
         compiled from "C:\xampp\htdocs\task_on_csCart\design\themes\responsive\templates\addons\reward_points\views\products\components\product_representation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9667719585f168117775046-92293893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dfc71e2bffd8afbb6257e5097f655cfc16893f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\themes\\responsive\\templates\\addons\\reward_points\\views\\products\\components\\product_representation.tpl',
      1 => 1595307390,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9667719585f168117775046-92293893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1681177dd752_57587221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1681177dd752_57587221')) {function content_5f1681177dd752_57587221($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','points_lowercase','reward_points','points_lowercase','price_in_points','points_lowercase','reward_points','points_lowercase'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['points_info']['price']) {?>
    <div class="ty-reward-group">
        <span class="ty-control-group__label product-list-field"><?php echo $_smarty_tpl->__("price_in_points");?>
:</span>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['price']));?>
</bdi></span>
    </div>
<?php }?>
<div class="ty-reward-group product-list-field<?php if (!$_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']) {?> hidden<?php }?>">
    <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</span>
    <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']));?>
</bdi></span>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/views/products/components/product_representation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/views/products/components/product_representation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['points_info']['price']) {?>
    <div class="ty-reward-group">
        <span class="ty-control-group__label product-list-field"><?php echo $_smarty_tpl->__("price_in_points");?>
:</span>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['price']));?>
</bdi></span>
    </div>
<?php }?>
<div class="ty-reward-group product-list-field<?php if (!$_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']) {?> hidden<?php }?>">
    <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</span>
    <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']));?>
</bdi></span>
</div><?php }?><?php }} ?>
