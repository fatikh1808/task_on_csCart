<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 07:59:21
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\call_requests\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19670601145f167629e19fc8-86771144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c92d7cb7a9be7f62904bf3931b28f1e874f7d42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\call_requests\\hooks\\index\\scripts.post.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19670601145f167629e19fc8-86771144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167629e81247_57812069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167629e81247_57812069')) {function content_5f167629e81247_57812069($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/call_requests/index.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['phone_mask']) {?>
    Tygh.call_phone_mask = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['call_requests']['phone_mask'], ENT_QUOTES, 'UTF-8');?>
'
<?php }?>
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
