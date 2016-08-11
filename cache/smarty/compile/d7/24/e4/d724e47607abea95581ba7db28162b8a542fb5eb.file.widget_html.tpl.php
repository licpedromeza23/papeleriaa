<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 09:46:00
         compiled from "C:\xampp\htdocs\papeleria\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2137357ab3e288342f2-22079835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd724e47607abea95581ba7db28162b8a542fb5eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1470839831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2137357ab3e288342f2-22079835',
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
  'unifunc' => 'content_57ab3e28857575_63012777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3e28857575_63012777')) {function content_57ab3e28857575_63012777($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
