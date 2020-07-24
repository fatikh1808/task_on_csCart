<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:20:57
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\blog\hooks\block_manager\update_block_picker_extra_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7059420255f167b39a385d3-15989187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f629add3ba5eaca8edfdde30e2890b216d4fab4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\blog\\hooks\\block_manager\\update_block_picker_extra_url.override.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7059420255f167b39a385d3-15989187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_object_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167b39a823c3_88836369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167b39a823c3_88836369')) {function content_5f167b39a823c3_88836369($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch']=="pages.view?page_type=".((string)@constant('PAGE_TYPE_BLOG'))) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars(@constant('PAGE_TYPE_BLOG'), ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
