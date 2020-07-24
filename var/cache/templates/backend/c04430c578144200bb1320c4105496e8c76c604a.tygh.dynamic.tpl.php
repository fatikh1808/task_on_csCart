<?php /* Smarty version Smarty-3.1.21, created on 2020-07-24 02:59:00
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\views\promotions\dynamic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19360580735f1a2444b7a3f3-12931146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c04430c578144200bb1320c4105496e8c76c604a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\views\\promotions\\dynamic.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19360580735f1a2444b7a3f3-12931146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elm_id' => 0,
    'picker_selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1a2444dc17a8_13327937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1a2444dc17a8_13327937')) {function content_5f1a2444dc17a8_13327937($_smarty_tpl) {?><div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_REQUEST['condition']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/condition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_selected_companies'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value), 0);?>


<?php } elseif ($_REQUEST['group']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_REQUEST['bonus']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/bonus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
