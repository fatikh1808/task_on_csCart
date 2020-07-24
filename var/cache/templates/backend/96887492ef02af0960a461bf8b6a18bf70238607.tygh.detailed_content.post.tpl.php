<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:14:02
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\yandex_checkout\hooks\companies\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3835484325f16799a354ba4-51373426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96887492ef02af0960a461bf8b6a18bf70238607' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\yandex_checkout\\hooks\\companies\\detailed_content.post.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3835484325f16799a354ba4-51373426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_yandex_checkout_for_marketplaces_used' => 0,
    'runtime' => 0,
    'company_data' => 0,
    'is_vendor_plans_installed' => 0,
    'addons_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f16799a3dd950_92101984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f16799a3dd950_92101984')) {function content_5f16799a3dd950_92101984($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yandex_checkout.yandex_checkout','yandex_checkout.shop_id','yandex_checkout.yandex_checkout_for_marketplaces_vendor_info','yandex_checkout.marketplace_fee','yandex_checkout.marketplace_fee_notice','yandex_checkout.marketplace_fee_disabled_notice'));
?>
<?php if ($_smarty_tpl->tpl_vars['is_yandex_checkout_for_marketplaces_used']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("yandex_checkout.yandex_checkout")), 0);?>

    <div class="control-group">
        <label class="control-label"
               for="elm_yandex_checkout_shop_id"
        ><?php echo $_smarty_tpl->__("yandex_checkout.shop_id");?>
:</label>
        <div class="controls">
            <input type="text"
                   name="company_data[yandex_checkout_shopid]"
                   id="elm_yandex_checkout_shop_id"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['yandex_checkout_shopid'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
        <div class="controls">
            <p class="muted description">
                <?php echo $_smarty_tpl->__("yandex_checkout.yandex_checkout_for_marketplaces_vendor_info");?>

            </p>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"
               for="elm_yandex_checkout_marketplace_fee"
        ><?php echo $_smarty_tpl->__("yandex_checkout.marketplace_fee");?>
:</label>
        <div class="controls">
            <input type="text"
                   name="company_data[yandex_checkout_marketplace_fee]"
                   id="elm_yandex_checkout_marketplace_fee"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['yandex_checkout_marketplace_fee'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php if (!$_smarty_tpl->tpl_vars['is_vendor_plans_installed']->value) {?>disabled<?php }?>
            /> %
        </div>
        <div class="controls">
            <p class="muted description">
                <?php if ($_smarty_tpl->tpl_vars['is_vendor_plans_installed']->value) {?>
                    <?php echo $_smarty_tpl->__("yandex_checkout.marketplace_fee_notice");?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("yandex_checkout.marketplace_fee_disabled_notice",array("[href]"=>$_smarty_tpl->tpl_vars['addons_page']->value));?>

                <?php }?>
            </p>
        </div>
    </div>
<?php }?><?php }} ?>
