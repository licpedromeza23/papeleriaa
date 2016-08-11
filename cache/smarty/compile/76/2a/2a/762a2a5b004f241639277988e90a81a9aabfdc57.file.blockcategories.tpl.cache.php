<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:31:17
         compiled from "C:\xampp\htdocs\papeleria\themes\ap_food\modules\blockcategories\blockcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1721857ab56d51477c3-78668496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '762a2a5b004f241639277988e90a81a9aabfdc57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\themes\\ap_food\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1470839826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1721857ab56d51477c3-78668496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab56d51c47e9_52828361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab56d51c47e9_52828361')) {function content_57ab56d51c47e9_52828361($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['blockCategTree']->value&&count($_smarty_tpl->tpl_vars['blockCategTree']->value['children'])) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4 class="title_block">
		<?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>

		<?php }?>
	</h4>
	<div class="block_content">
		<ul class="list-block list-group bullet tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

				<?php }?>
			<?php } ?>
		</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }?>
<?php }} ?>
