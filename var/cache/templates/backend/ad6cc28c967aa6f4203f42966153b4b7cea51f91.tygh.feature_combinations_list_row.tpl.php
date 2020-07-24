<?php /* Smarty version Smarty-3.1.21, created on 2020-07-22 04:35:30
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\product_variations\views\product_variations\components\feature_combinations_list_row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3960368675f1797e2c84f58-72028301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad6cc28c967aa6f4203f42966153b4b7cea51f91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\feature_combinations_list_row.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3960368675f1797e2c84f58-72028301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'combination' => 0,
    'level' => 0,
    'combination_id' => 0,
    'group_meta' => 0,
    'shift' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1797e2d38ef8_06292187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1797e2d38ef8_06292187')) {function content_5f1797e2d38ef8_06292187($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\task_on_csCart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><tr class="multiple-table-row cm-row-status-<?php if ($_smarty_tpl->tpl_vars['combination']->value['exists']) {?>d<?php } else { ?>a<?php }?>">
    <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>


    <td width="1%">
        <input type="checkbox" name="combination_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-item<?php if ($_smarty_tpl->tpl_vars['group_meta']->value) {?> cm-item-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['combination']->value['exists']) {?> checked disabled<?php }?>/>
    </td>
    <td width="99%">
        <span style="padding-left:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"><span class="row-status normal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
    </td>
</tr>
<?php }} ?>
