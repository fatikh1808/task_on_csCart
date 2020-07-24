<?php /* Smarty version Smarty-3.1.21, created on 2020-07-22 04:35:30
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\product_variations\views\product_variations\components\feature_combinations_grouped_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11897636335f1797e2046694-12860512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bb20719399e245aeb70c8c1a784304200615c6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\feature_combinations_grouped_list.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11897636335f1797e2046694-12860512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'expand_all' => 0,
    'combinations' => 0,
    'combination' => 0,
    'variant_id' => 0,
    'first_variant_id' => 0,
    'groups' => 0,
    'compbination_id' => 0,
    'group' => 0,
    'group_id' => 0,
    'level' => 0,
    'first_combination' => 0,
    'item' => 0,
    'combination_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1797e21d0df4_74999066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1797e21d0df4_74999066')) {function content_5f1797e21d0df4_74999066($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','product_variations.variations','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items'));
?>
<?php $_smarty_tpl->tpl_vars['expand_all'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['expand_all']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<table class="table table-tree table-middle table--relative">
    <thead>
    <tr>
        <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="99%">
            <div class="pull-left">
                <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_variations_tree" class="cm-combinations<?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="icon-caret-right"> </span></span>
                <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_variations_tree" class="cm-combinations<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="icon-caret-down"> </span></span>
            </div>
            &nbsp;<?php echo $_smarty_tpl->__("product_variations.variations");?>

        </th>
    </tr>
    </thead>
</table>
<div class="variations_tree">
    <?php $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable(array(), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['combination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['combination']->_loop = false;
 $_smarty_tpl->tpl_vars['compbination_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['combinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['combination']->key => $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->_loop = true;
 $_smarty_tpl->tpl_vars['compbination_id']->value = $_smarty_tpl->tpl_vars['combination']->key;
?>
        <?php $_smarty_tpl->tpl_vars['first_variant_id'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['combination']->value['selected_variants']), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['variant_id']->value!==$_smarty_tpl->tpl_vars['first_variant_id']->value) {?>
            <?php $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['first_variant_id']->value, null, 0);?>

            <?php if (!isset($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['variant_id']->value])) {?>
                <?php $_smarty_tpl->createLocalArrayVariable('groups', null, 0);
$_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['variant_id']->value]['disable'] = true;?>
            <?php }?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['combination']->value['exists']) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('groups', null, 0);
$_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['variant_id']->value]['disable'] = false;?>
        <?php }?>
        
        <?php $_smarty_tpl->createLocalArrayVariable('groups', null, 0);
$_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['variant_id']->value]['items'][$_smarty_tpl->tpl_vars['compbination_id']->value] = $_smarty_tpl->tpl_vars['combination']->value;?>
    <?php } ?>

    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
        <?php $_smarty_tpl->tpl_vars['first_combination'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['group']->value['items']), null, 0);?>

        <table class="table table-tree table-middle table--relative">
            <tr class="multiple-table-row cm-row-status-<?php if ($_smarty_tpl->tpl_vars['group']->value['disable']) {?>d<?php } else { ?>a<?php }?>">
                <td width="1%">
                    <input type="checkbox" value="" data-ca-target="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-check-items cm-item cm-item-status-d" <?php if ($_smarty_tpl->tpl_vars['group']->value['disable']) {?> checked disabled<?php }?> />
                </td>
                <td width="99%">
                    <span style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value*14, ENT_QUOTES, 'UTF-8');?>
px;"><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>" ><span class="icon-caret-right"> </span></span><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>" ><span class="icon-caret-down"> </span></span><span class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_combination']->value['group_name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
                </td>
            </tr>
        </table>
        <div id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?>class="hidden"<?php }?>>
            <table class="table table-tree table-middle table--relative">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['combination_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['combination_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/feature_combinations_list_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('level'=>1,'combination'=>$_smarty_tpl->tpl_vars['item']->value,'combination_id'=>$_smarty_tpl->tpl_vars['combination_id']->value,'group_meta'=>"group_".((string)$_smarty_tpl->tpl_vars['group_id']->value)), 0);?>

                <?php } ?>
            </table>
        </div>
    <?php } ?>

</div>
<?php }} ?>
