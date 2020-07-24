<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 09:19:19
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\yml_export\hooks\product_features\variants_list_body.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8351096615f1688e763f576-11659155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577c298c1b0cbb9cfe741488a5ec0c9a427ba6bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\yml_export\\hooks\\product_features\\variants_list_body.post.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8351096615f1688e763f576-11659155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1688e7701999_34373416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1688e7701999_34373416')) {function content_5f1688e7701999_34373416($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2 input-hidden">
</td>
<?php }} ?>
