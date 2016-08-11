<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 09:44:49
         compiled from "C:\xampp\htdocs\papeleria\admin3654m3aot\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951557ab3de1c5eeb4-67862184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a88bc0641bf8bd1f0507df1c2612fc9c0f802b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\admin3654m3aot\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951557ab3de1c5eeb4-67862184',
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
  'unifunc' => 'content_57ab3de1c66bb9_25071432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3de1c66bb9_25071432')) {function content_57ab3de1c66bb9_25071432($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
