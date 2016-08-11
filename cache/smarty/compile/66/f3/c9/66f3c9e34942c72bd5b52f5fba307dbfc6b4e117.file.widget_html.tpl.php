<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 09:45:59
         compiled from "C:\xampp\htdocs\papeleria\themes\ap_office\modules\leomanagewidgets\views\widgets\displaybottom\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:668257ab3e27ea0958-31636418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f3c9e34942c72bd5b52f5fba307dbfc6b4e117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\themes\\ap_office\\modules\\leomanagewidgets\\views\\widgets\\displaybottom\\widget_html.tpl',
      1 => 1470839720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668257ab3e27ea0958-31636418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab3e27ebbee4_71083944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3e27ebbee4_71083944')) {function content_57ab3e27ebbee4_71083944($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4>
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
