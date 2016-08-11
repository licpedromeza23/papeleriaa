<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 09:45:59
         compiled from "C:\xampp\htdocs\papeleria\modules\leocustomajax\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067757ab3e27797b37-31955935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66159514734ba778090c353c3b178af1a6e153a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\modules\\leocustomajax\\footer.tpl',
      1 => 1470839830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067757ab3e27797b37-31955935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leo_customajax_pn' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_count' => 0,
    'leo_customajax_acolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab3e277b30b6_89154557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3e277b30b6_89154557')) {function content_57ab3e277b30b6_89154557($_smarty_tpl) {?>

<script type="text/javascript">
	var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_pn']->value;?>
<?php } else { ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_img']->value;?>
<?php } else { ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_tran']->value;?>
<?php } else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_count']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_count']->value;?>
<?php } else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_acolor']->value;?>
<?php } else { ?>0<?php }?>,
	}
    $(document).ready(function(){	
		var leoCustomAjax = new $.LeoCustomAjax();
        leoCustomAjax.processAjax();
    });
</script><?php }} ?>
