<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:03:05
         compiled from "C:\xampp\htdocs\task_on_csCart\design\themes\responsive\templates\addons\geo_maps\blocks\customer_location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17048358515f1677095caf44-31321148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628100051cc0b6a5bd517300c92b36177f42ecc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\themes\\responsive\\templates\\addons\\geo_maps\\blocks\\customer_location.tpl',
      1 => 1595307377,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17048358515f1677095caf44-31321148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'block' => 0,
    'id' => 0,
    'location_detected' => 0,
    'block_id' => 0,
    'location' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167709653694_59960665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167709653694_59960665')) {function content_5f167709653694_59960665($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/task_on_csCart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.your_city','geo_maps.select_your_city','geo_maps.your_city','geo_maps.select_your_city'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status']=="A") {?>
    <?php $_smarty_tpl->tpl_vars['block_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value : $tmp), null, 0);?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['location_detected']->value)===null||$tmp==='' ? false : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php $_smarty_tpl->_capture_stack[0][] = array("geo_maps_location_popup_opener", null, null); ob_start(); ?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['location']->value['city'])===null||$tmp==='' ? $_smarty_tpl->__("geo_maps.your_city") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"geo_maps.customer_geolocation",'link_text'=>Smarty::$_smarty_vars['capture']['geo_maps_location_popup_opener'],'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->__("geo_maps.select_your_city"),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->tpl_vars['block_id']->value),'content'=>''), 0);?>

    <!--geo_maps_location_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/blocks/customer_location.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/blocks/customer_location.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status']=="A") {?>
    <?php $_smarty_tpl->tpl_vars['block_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value : $tmp), null, 0);?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['location_detected']->value)===null||$tmp==='' ? false : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php $_smarty_tpl->_capture_stack[0][] = array("geo_maps_location_popup_opener", null, null); ob_start(); ?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['location']->value['city'])===null||$tmp==='' ? $_smarty_tpl->__("geo_maps.your_city") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"geo_maps.customer_geolocation",'link_text'=>Smarty::$_smarty_vars['capture']['geo_maps_location_popup_opener'],'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->__("geo_maps.select_your_city"),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->tpl_vars['block_id']->value),'content'=>''), 0);?>

    <!--geo_maps_location_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}?><?php }} ?>
