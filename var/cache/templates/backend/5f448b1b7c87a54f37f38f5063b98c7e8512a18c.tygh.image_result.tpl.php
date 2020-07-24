<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:28:14
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\common\select2\components\image_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5255925765f167ceeaef054-46231945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f448b1b7c87a54f37f38f5063b98c7e8512a18c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\common\\select2\\components\\image_result.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5255925765f167ceeaef054-46231945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_pre' => 0,
    'append' => 0,
    'text' => 0,
    'prefix' => 0,
    'content' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167ceeb3c879_82060732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167ceeb3c879_82060732')) {function content_5f167ceeb3c879_82060732($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('enter_color_name_and_code'));
?>
<div class="object-selector-result-wrapper">
    <span class="object-selector-result object-selector-result--color">
        <?php echo $_smarty_tpl->tpl_vars['content_pre']->value;?>

        <img class="object-selector-selection__image" src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['append']->value)===null||$tmp==='' ? "[append]" : $tmp), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "[text]" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <span class="object-selector-result__text">
            <span class="object-selector-result__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
</span> <span class="object-selector-result__body"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "[text]" : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        </span>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </span>
    <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
        <div class="object-selector-result__help object-selector-result__help--color">
            <?php echo $_smarty_tpl->__("enter_color_name_and_code");?>

        </div>
    <?php }?>
</div><?php }} ?>
