<?php /* Smarty version Smarty-3.1.19, created on 2016-08-09 18:54:25
         compiled from "C:\xampp\htdocs\Tienda\admin\themes\default\template\helpers\tree\tree_node_item_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1816857aa0ac145aee1-34413788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b879f3dbdfd6d1f54217d40998cd0a39ef8a56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_checkbox_shops.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816857aa0ac145aee1-34413788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aa0ac14725e8_04989133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa0ac14725e8_04989133')) {function content_57aa0ac14725e8_04989133($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="checkbox" name="checkBoxShopAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
