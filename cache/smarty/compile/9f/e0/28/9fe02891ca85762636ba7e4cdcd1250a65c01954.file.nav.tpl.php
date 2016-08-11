<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 09:46:06
         compiled from "C:\xampp\htdocs\papeleria\themes\ap_office\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1463557ab3e2e8d1c81-95977579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fe02891ca85762636ba7e4cdcd1250a65c01954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\themes\\ap_office\\modules\\blockuserinfo\\nav.tpl',
      1 => 1470839720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1463557ab3e2e8d1c81-95977579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'is_logged' => 0,
    'cookie' => 0,
    'order_process' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab3e2e923d13_72730765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3e2e923d13_72730765')) {function content_57ab3e2e923d13_72730765($_smarty_tpl) {?><script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 1025 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	$(window).resize(function() {
		if( $(window).width() < 1025 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info pull-left e-translate-top ">
	<div data-toggle="dropdown" class="popup-title"><a href="#"><i class="fa fa-cog"></i><span><?php echo smartyTranslate(array('s'=>'Top links','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 </span></a></div>	
		<ul class="links">
		<li class="first">
			<a id="wishlist-total" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Wish List','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
					<span><?php echo smartyTranslate(array('s'=>'Hello','mod'=>'blockuserinfo'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
			</li>
			<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			</li>
		<?php } else { ?>
			<li><a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
		<?php }?>

		
		<li class="last"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="last"><?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
				<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		</li>
		
		</ul>
	
</div>	<?php }} ?>
