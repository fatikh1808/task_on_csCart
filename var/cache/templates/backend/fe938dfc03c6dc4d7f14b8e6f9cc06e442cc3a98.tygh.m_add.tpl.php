<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:26:00
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\views\products\m_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2214325765f167c68e245f4-17882469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe938dfc03c6dc4d7f14b8e6f9cc06e442cc3a98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\views\\products\\m_add.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2214325765f167c68e245f4-17882469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default_category_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167c690213d3_43126407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167c690213d3_43126407')) {function content_5f167c690213d3_43126407($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('main_category','product_name','vendor','price','list_price_short','position_short','status','main_category','product_name','vendor','price','list_price_short','position_short','status','active','hidden','disabled','add_products'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="products_m_addition_form">

<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
    <tr class="cm-first-sibling">
        <th><?php echo $_smarty_tpl->__("main_category");?>
</th>
        <th><?php echo $_smarty_tpl->__("product_name");?>
</th>
        <th><?php echo $_smarty_tpl->__("vendor");?>
</th> 
        <th><?php echo $_smarty_tpl->__("price");?>
</th>
        <th class="wrap" width="12%"><?php echo $_smarty_tpl->__("list_price_short");?>
</th>
        <th><?php echo $_smarty_tpl->__("position_short");?>
</th>
        <th><?php echo $_smarty_tpl->__("status");?>
</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tr class="table-row" id="box_new_product">
        <td data-th="<?php echo $_smarty_tpl->__("main_category");?>
">
            <?php if (fn_show_picker("categories",@constant('CATEGORY_THRESHOLD'))) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"products_data[0][category_ids][]",'item_ids'=>$_smarty_tpl->tpl_vars['default_category_id']->value,'hide_link'=>true,'hide_delete_button'=>true,'prepend'=>true), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"products_data[0][category_ids][]",'select_class'=>"input-medium",'hide_root'=>true,'id'=>''), 0);?>

            <?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("product_name");?>
"><input type="text" name="products_data[0][product]" value="" class="input-medium" /></td>
        
        <td width="18%" class="wrap" data-th="<?php echo $_smarty_tpl->__("vendor");?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"products_data[0][company_id]",'id'=>"products_data_company_id_0",'no_wrap'=>true), 0);?>

        </td>
        <td data-th="<?php echo $_smarty_tpl->__("price");?>
"><input type="text" name="products_data[0][price]" size="4" value="0.00" class="input-mini" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("list_price_short");?>
"><input type="text" name="products_data[0][list_price]" size="4" value="0.00" class="input-mini" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input type="text" name="products_data[0][position]" size="3" value="0" class="input-micro" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <select name="products_data[0][status]" class="input-small">
                <option value="A"><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="H"><?php echo $_smarty_tpl->__("hidden");?>
</option>
                <option value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </td>
        <td class="nowrap" data-th="">
            <div class="hidden-tools">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"new_product"), 0);?>

            </div>
        </td>
    </tr>
    </table>
</div>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.m_add]",'but_role'=>"submit-link",'but_target_form'=>"products_m_addition_form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("add_products"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>
<?php }} ?>
