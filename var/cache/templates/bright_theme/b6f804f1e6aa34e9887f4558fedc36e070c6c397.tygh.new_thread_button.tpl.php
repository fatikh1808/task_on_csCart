<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:45:58
         compiled from "C:\xampp\htdocs\task_on_csCart\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\components\new_thread_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2122590645f1681167f2370-13750844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f804f1e6aa34e9887f4558fedc36e070c6c397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\new_thread_button.tpl',
      1 => 1595307377,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2122590645f1681167f2370-13750844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'object_id' => 0,
    'config' => 0,
    'return_current_url' => 0,
    'show_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f16811688a701_89525570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f16811688a701_89525570')) {function content_5f16811688a701_89525570($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.ask_a_question','vendor_communication.ask_a_question','vendor_communication.ask_a_question','vendor_communication.ask_a_question','vendor_communication.ask_a_question','vendor_communication.ask_a_question','vendor_communication.ask_a_question','vendor_communication.ask_a_question'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <a title="<?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>
" class="<?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <i class="ty-icon-chat"></i>
        <?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>

    </a>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

    <a title="<?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>
" href="<?php echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_login_form" class="cm-dialog-opener cm-dialog-auto-size <?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?>" rel="nofollow">
        <i class="ty-icon-chat"></i>
        <?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>

    </a>

    <?php if ($_smarty_tpl->tpl_vars['show_form']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <a title="<?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>
" class="<?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?> cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="new_thread_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <i class="ty-icon-chat"></i>
        <?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>

    </a>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

    <a title="<?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>
" href="<?php echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="new_thread_login_form" class="cm-dialog-opener cm-dialog-auto-size <?php if (fn_allowed_for("MULTIVENDOR")) {?>ty-vendor-communication__post-write<?php }?>" rel="nofollow">
        <i class="ty-icon-chat"></i>
        <?php echo $_smarty_tpl->__("vendor_communication.ask_a_question");?>

    </a>

    <?php if ($_smarty_tpl->tpl_vars['show_form']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
<?php }
}?><?php }} ?>
