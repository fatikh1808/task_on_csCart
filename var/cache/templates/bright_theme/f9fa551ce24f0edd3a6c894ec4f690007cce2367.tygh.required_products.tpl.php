<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:46:18
         compiled from "C:\xampp\htdocs\task_on_csCart\design\themes\responsive\templates\addons\required_products\blocks\product_tabs\required_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3481484335f16812a0d7221-72887245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9fa551ce24f0edd3a6c894ec4f690007cce2367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\themes\\responsive\\templates\\addons\\required_products\\blocks\\product_tabs\\required_products.tpl',
      1 => 1595307403,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3481484335f16812a0d7221-72887245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f16812a120962_63367901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f16812a120962_63367901')) {function content_5f16812a120962_63367901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>"Y",'details_page'=>false,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>false,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/blocks/product_tabs/required_products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/required_products/blocks/product_tabs/required_products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['required_products']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['product']->value['required_products'],'show_product_status'=>"Y",'details_page'=>false,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>false,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>false,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'no_pagination'=>true,'no_sorting'=>true,'obj_prefix'=>"required_products"), 0);?>

<?php }
}?><?php }} ?>
