<?php /* Smarty version Smarty-3.1.21, created on 2020-07-22 04:35:29
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\product_variations\views\product_variations\components\feature_combinations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2586162285f1797e1a50025-25320287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504afcc6e15e86014300eab45ca6979237fb46ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\feature_combinations.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2586162285f1797e1a50025-25320287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'combinations' => 0,
    'product_data' => 0,
    'first_combination' => 0,
    'levels_count' => 0,
    'is_too_many_combinations' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1797e1b2ad38_29485343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1797e1b2ad38_29485343')) {function content_5f1797e1b2ad38_29485343($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.too_many_combinations','product_variations.no_available_features'));
?>
<?php if ($_smarty_tpl->tpl_vars['combinations']->value) {?>
    <form action="<?php echo htmlspecialchars(fn_url("product_variations.generate"), ENT_QUOTES, 'UTF-8');?>
" name="generate_product_to_group_form" method="post">
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />

        <div class="items-container">
            <?php $_smarty_tpl->tpl_vars['first_combination'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['combinations']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['levels_count'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['first_combination']->value['selected_variants']), null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['levels_count']->value>1) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/feature_combinations_grouped_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/feature_combinations_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value), 0);?>

            <?php }?>
        </div>
    </form>
<?php } elseif ($_smarty_tpl->tpl_vars['is_too_many_combinations']->value) {?>
    <div class="no-items row-fluid">
        <div class="span8 offset2 left"><?php echo $_smarty_tpl->__("product_variations.too_many_combinations");?>
</div>
    </div>
<?php } else { ?>
    <div class="no-items row-fluid">
        <div class="span8 offset2 left"><?php echo $_smarty_tpl->__("product_variations.no_available_features");?>
</div>
    </div>
<?php }?><?php }} ?>
