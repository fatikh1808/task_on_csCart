<?php /* Smarty version Smarty-3.1.21, created on 2020-07-21 08:25:50
         compiled from "C:\xampp\htdocs\task_on_csCart\design\backend\templates\addons\reward_points\hooks\products\global_update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17193617395f167c5ec720a1-19464838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340a53cf602b9eacfac42adc90f11cc525810a9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task_on_csCart\\design\\backend\\templates\\addons\\reward_points\\hooks\\products\\global_update.post.tpl',
      1 => 1590666263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17193617395f167c5ec720a1-19464838',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f167c5ecb46a4_77179946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f167c5ecb46a4_77179946')) {function content_5f167c5ecb46a4_77179946($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','points_lower'));
?>
<div class="control-group">
    <label for="gu_points" class="control-label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
    <div class="controls">
    	<input type="text" id="gu_points" name="update_data[price_in_points]" size="6" value="">
    	<select name="update_data[price_in_points_type]">
    	    <option value="A" ><?php echo $_smarty_tpl->__("points_lower");?>
</option>
    	    <option value="P" >%</option>
    	</select>
    </div>
</div><?php }} ?>
