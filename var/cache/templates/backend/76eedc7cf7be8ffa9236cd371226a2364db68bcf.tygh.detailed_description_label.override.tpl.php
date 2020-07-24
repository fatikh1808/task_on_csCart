<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:03:32
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\blog\hooks\pages\detailed_description_label.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11648249165f16772433a476-32410146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76eedc7cf7be8ffa9236cd371226a2364db68bcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_label.override.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11648249165f16772433a476-32410146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1677244404a7_53039527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1677244404a7_53039527')) {function content_5f1677244404a7_53039527($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('post_description','ttc_post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_BLOG')) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_post_description")), 0);?>
:</label>
<?php }?>
<?php }} ?>
