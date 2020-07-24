<?php /* Smarty version Smarty-3.1.21, created on 2020-07-22 04:35:28
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\product_variations\views\product_variations\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8140259595f1797e017a7d4-48837416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ca533603b403cb76d5cf6c9332ab9192066aa9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\update.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8140259595f1797e017a7d4-48837416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'is_allow_generate_variations' => 0,
    'products' => 0,
    'count_available_combinations' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f1797e03a1805_94177799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1797e03a1805_94177799')) {function content_5f1797e03a1805_94177799($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.link_existing','product_variations.create_new','cancel','product_variations.add_variations','product_variations.add_variations'));
?>
<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("product_variations.link_existing");?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
            <li id="tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("product_variations.create_new");?>
</a></li>
        <?php }?>
    </ul>
</div>
<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/search_product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
        <div id="content_tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/feature_combinations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php }?>
<div class="buttons-container product-variations__add-variations-buttons-container">
    <div>
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
    <div class="cm-tab-tools" id="tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_variations.add_variations"),'but_role'=>"submit-link",'but_name'=>"dispatch[product_variations.update]",'but_meta'=>"btn-primary",'but_target_form'=>"add_product_to_group_form"), 0);?>

        <?php }?>
    <!--tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
        <div class="cm-tab-tools" id="tools_tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['count_available_combinations']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_variations.add_variations"),'but_role'=>"submit-link",'but_name'=>"dispatch[product_variations.generate]",'but_meta'=>"btn-primary",'but_target_form'=>"generate_product_to_group_form"), 0);?>

            <?php }?>
        <!--tools_tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
</div>
<?php }} ?>
