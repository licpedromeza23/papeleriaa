<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 15:43:24
         compiled from "C:\xampp\htdocs\papeleria\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1964257ab2f7c299f55-75278632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb6863bc6e4fd27d20338901b3656871426f04da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964257ab2f7c299f55-75278632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab2f7c29ddd3_79907381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab2f7c29ddd3_79907381')) {function content_57ab2f7c29ddd3_79907381($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
