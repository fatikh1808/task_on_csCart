<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:27:40
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\product_variations\hooks\products\categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17515172565f167ccc7c6111-16870024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de9bdb4293dcde04a2a04d851c63a9c866b492e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\categories_section.override.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17515172565f167ccc7c6111-16870024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167ccc807ed2_40593245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167ccc807ed2_40593245')) {function content_5f167ccc807ed2_40593245($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:categories_section")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:categories_section"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
