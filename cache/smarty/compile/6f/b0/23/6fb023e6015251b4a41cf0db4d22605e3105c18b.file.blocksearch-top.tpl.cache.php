<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 09:46:01
         compiled from "C:\xampp\htdocs\papeleria\themes\ap_office\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3155257ab3e291373e4-08488524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb023e6015251b4a41cf0db4d22605e3105c18b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\themes\\ap_office\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470839719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3155257ab3e291373e4-08488524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab3e2915e4e2_29172053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3e2915e4e2_29172053')) {function content_57ab3e2915e4e2_29172053($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-xs-12 col-sm-12 col-md-9-6 col-lg-7-2 inner">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<div class="input-group">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<span class="input-group-btn">
				<button type="submit" name="submit_search" class="btn btn-outline-inverse">
				<span class="button-search fa fa-search"><span class="unvisible"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span></span>
			</button></span>
		</div>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
