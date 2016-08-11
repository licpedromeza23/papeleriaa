<?php /* Smarty version Smarty-3.1.19, created on 2016-08-09 12:07:31
         compiled from "C:\xampp\htdocs\Tienda\admin3413ktdjk\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1922557aa0dd3d54866-95360918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcbac68c1af2ddb212fa76f373fe187eb026673a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda\\admin3413ktdjk\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1922557aa0dd3d54866-95360918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aa0dd3d5c569_25225157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa0dd3d5c569_25225157')) {function content_57aa0dd3d5c569_25225157($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
