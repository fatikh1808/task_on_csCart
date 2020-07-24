<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:28:13
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\views\products\components\product_assign_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10901385205f167ced1f7766-77709335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69b2c40322183370ce2f5117c133f82c14925a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\views\\products\\components\\product_assign_features.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10901385205f167ced1f7766-77709335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_features' => 0,
    'feature' => 0,
    'feature_id' => 0,
    'selected' => 0,
    'enable_images' => 0,
    'product_id' => 0,
    'descr_sl' => 0,
    'select2_enable_add' => 0,
    'allow_enter_variant' => 0,
    'select2_template_type' => 0,
    'template_type' => 0,
    'template_result_selector' => 0,
    'template_selection_selector' => 0,
    'template_result_add_selector' => 0,
    'variant' => 0,
    'features_used' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167ced39c9d8_79481448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167ced39c9d8_79481448')) {function content_5f167ced39c9d8_79481448($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('none','none','none','search','add','add'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/select2_color.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['features_used'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php $_smarty_tpl->tpl_vars['allow_enter_variant'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style']==smarty_modifier_enum("ProductFeatureStyles::COLOR")||$_smarty_tpl->tpl_vars['feature']->value['filter_style']==smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
        <?php $_smarty_tpl->tpl_vars['template_type'] = new Smarty_variable("color", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['enable_images'] = new Smarty_variable(false, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_result_selector'] = new Smarty_variable("#template_result_feature_color", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_selection_selector'] = new Smarty_variable("#template_selection_feature_color", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_result_add_selector'] = new Smarty_variable("#template_result_add_feature_color", null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('features_used', null, 0);
$_smarty_tpl->tpl_vars['features_used']->value[] = "color";?>

    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style']==smarty_modifier_enum("ProductFeatureStyles::BRAND")) {?>
        <?php $_smarty_tpl->tpl_vars['template_type'] = new Smarty_variable("image", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['enable_images'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_result_selector'] = new Smarty_variable("#template_result_feature_image", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_selection_selector'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_result_add_selector'] = new Smarty_variable("#template_result_add_feature", null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('features_used', null, 0);
$_smarty_tpl->tpl_vars['features_used']->value[] = "image";?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['template_type'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['enable_images'] = new Smarty_variable(false, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_result_selector'] = new Smarty_variable("#template_result_feature", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_selection_selector'] = new Smarty_variable("#template_selection_feature", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['template_result_add_selector'] = new Smarty_variable("#template_result_add_feature", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']!=smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_product_feature")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_product_feature"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="control-group">
            <label class="control-label" for="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>

            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                <?php $_smarty_tpl->tpl_vars["value_selected"] = new Smarty_variable(false, null, 0);?>
                <input type="hidden"
                       name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['selected']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['feature']->value['variant_id'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                />
                <input type="hidden"
                       name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][variant]"
                       id="product_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                       value=""
                />
                <div class="object-selector object-selector--mobile-full-width">
                    <select id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="cm-object-selector object-selector--mobile-full-width"
                            name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            data-ca-enable-images="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['enable_images']->value)===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-image-width="30"
                            data-ca-image-height="30"
                            data-ca-enable-search="true"
                            data-ca-escape-html="false"
                            data-ca-load-via-ajax="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['use_variant_picker'])===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-page-size="10"
                            data-ca-data-url="<?php echo fn_url("product_features.get_variants_list?include_empty=Y&feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&lang_code=".((string)$_smarty_tpl->tpl_vars['descr_sl']->value));?>
"
                            data-ca-placeholder="-<?php echo $_smarty_tpl->__("none");?>
-"
                            data-ca-allow-clear="true"
                            data-ca-enable-add="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_enable_add']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['allow_enter_variant']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_template_type']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['template_type']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-result-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-selection-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_selection_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-result-add-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_add_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-new-value-holder-selector="#product_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                            >
                        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                        <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style']==smarty_modifier_enum("ProductFeatureStyles::COLOR")||$_smarty_tpl->tpl_vars['feature']->value['filter_style']==smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
                                <option
                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?> selected="selected"<?php }?>
                                    data-ca-feature-color="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
"
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } else { ?>
                                <option
                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?> selected="selected"<?php }?>
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php } ?>
                        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                    </select>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {?>
                <input type="hidden"
                       name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       value=""
                />
                <input type="hidden"
                       name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][variant]"
                       id="product_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                       value=""
                />
                <div class="object-selector">
                    <select id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="cm-object-selector"
                            name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][]"
                            multiple
                            data-ca-load-via-ajax="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['use_variant_picker'])===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-placeholder="<?php echo $_smarty_tpl->__("search");?>
"
                            data-ca-enable-search="true"
                            data-ca-escape-html="false"
                            data-ca-enable-images="true"
                            data-ca-image-width="30"
                            data-ca-image-height="30"
                            data-ca-close-on-select="false"
                            data-ca-page-size="10"
                            data-ca-data-url="<?php echo fn_url("product_features.get_variants_list?feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&lang_code=".((string)$_smarty_tpl->tpl_vars['descr_sl']->value));?>
"
                            data-ca-enable-add="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_enable_add']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['allow_enter_variant']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_template_type']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['template_type']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-result-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-selection-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_selection_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-template-result-add-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_add_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-new-value-holder-selector="#product_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                            >
                        <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?>
                <label class="checkbox">
                <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input type="checkbox" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['value']=="Y") {?>checked="checked"<?php }?> /></label>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_".((string)$_smarty_tpl->tpl_vars['feature_id']->value),'date_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value_int'])===null||$tmp==='' ? '' : $tmp)), 0);?>

            <?php } else { ?>
                <input type="text" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
if ($_smarty_tpl->tpl_vars['feature']->value['value_int']!='') {
echo htmlspecialchars(floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']), ENT_QUOTES, 'UTF-8');
}
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');
}?>" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {?> cm-value-decimal<?php }?>" />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_product_feature"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")&&$_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'additional_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id']), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0);?>

    <?php }?>
<?php } ?>

<template id="template_result_feature">
    <?php echo $_smarty_tpl->getSubTemplate ("common/select2/components/object_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</template>
<template id="template_result_add_feature">
    <?php echo $_smarty_tpl->getSubTemplate ("common/select2/components/object_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>$_smarty_tpl->__("add"),'icon'=>"icon-plus-sign"), 0);?>

</template>
<template id="template_selection_feature">
    <?php echo $_smarty_tpl->getSubTemplate ("common/select2/components/object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</template>

<?php if (in_array("color",$_smarty_tpl->tpl_vars['features_used']->value)) {?>
    <template id="template_result_feature_color">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select2/components/color_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </template>
    <template id="template_result_add_feature_color">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select2/components/color_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>$_smarty_tpl->__("add"),'help'=>true), 0);?>

    </template>
    <template id="template_selection_feature_color">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select2/components/color_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </template>
<?php }?>

<?php if (in_array("image",$_smarty_tpl->tpl_vars['features_used']->value)) {?>
    <template id="template_result_feature_image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select2/components/image_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </template>
<?php }?>
<?php }} ?>
