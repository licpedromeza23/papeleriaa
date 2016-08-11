<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:53:56
         compiled from "C:\xampp\htdocs\papeleria\themes\ap_funiture\layout\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2385857ab6a34a2b8c2-92729335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f6b65ed94352f5a235a540d47aaec9573f6223' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\themes\\ap_funiture\\layout\\default\\footer.tpl',
      1 => 1470851425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2385857ab6a34a2b8c2-92729335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6a34a3f142_87217306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6a34a3f142_87217306')) {function content_57ab6a34a3f142_87217306($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="no-border clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
