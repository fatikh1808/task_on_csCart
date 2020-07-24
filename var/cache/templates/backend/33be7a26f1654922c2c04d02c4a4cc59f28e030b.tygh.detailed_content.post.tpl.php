<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:03:38
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\social_buttons\hooks\pages\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7809439185f16772a2505b3-99430471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33be7a26f1654922c2c04d02c4a4cc59f28e030b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\social_buttons\\hooks\\pages\\detailed_content.post.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7809439185f16772a2505b3-99430471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f16772a2f8b81_50347019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f16772a2f8b81_50347019')) {function content_5f16772a2f8b81_50347019($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

    <?php }?>
<?php }?>
<?php }} ?>
