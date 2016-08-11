<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 15:43:23
         compiled from "C:\xampp\htdocs\papeleria\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1561957ab2f7ba17d08-91115426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa4f8861fa58d941ae45aeb66f21838927504cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1561957ab2f7ba17d08-91115426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab2f7ba1bb82_90766242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab2f7ba1bb82_90766242')) {function content_57ab2f7ba1bb82_90766242($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
