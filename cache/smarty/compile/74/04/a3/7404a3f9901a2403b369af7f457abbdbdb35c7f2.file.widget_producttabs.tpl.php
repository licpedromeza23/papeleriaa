<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:31:19
         compiled from "C:\xampp\htdocs\papeleria\themes\ap_food\modules\leomanagewidgets\views\widgets\widget_producttabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1126157ab56d7d84ed5-60054197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7404a3f9901a2403b369af7f457abbdbdb35c7f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\themes\\ap_food\\modules\\leomanagewidgets\\views\\widgets\\widget_producttabs.tpl',
      1 => 1470839826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1126157ab56d7d84ed5-60054197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myTab' => 0,
    'widget_heading' => 0,
    'special' => 0,
    'newproducts' => 0,
    'bestseller' => 0,
    'featured' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab56d7e44573_49714769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab56d7e44573_49714769')) {function content_57ab56d7e44573_49714769($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
" class="products_block exclusive block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="page-subheading widget-heading">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">			            
			<ul id="productTabs" class="nav nav-tabs">
			  <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>	
              <li><a href="#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
special" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Special','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['newproducts']->value) {?>	
              <li><a href="#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
newproducts" data-toggle="tab"><span></span><?php echo smartyTranslate(array('s'=>'New Arrivals','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['bestseller']->value) {?>	
              <li><a href="#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
bestseller" data-toggle="tab"><span></span><?php echo smartyTranslate(array('s'=>'Best Seller','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>	
              <li><a href="#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
featured" data-toggle="tab"><span></span><?php echo smartyTranslate(array('s'=>'Featured Products','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
            </ul>
			
            <div id="product_tab_content"><div class="product_tab_content tab-content">
			   <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>	
					<div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
special">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['special']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['myTab']->value)."-special", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	              </div>
			   <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['newproducts']->value) {?>		  
              <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
newproducts">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['newproducts']->value, null, 0);?> <?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['myTab']->value)."-newproducts", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              </div>
			 <?php }?>	
			 <?php if ($_smarty_tpl->tpl_vars['bestseller']->value) {?>		  
              <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
bestseller">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['bestseller']->value, null, 0);?> <?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['myTab']->value)."-bestseller", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              </div>   
			 <?php }?>	
			 <?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>		  
              <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
featured">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['featured']->value, null, 0);?> <?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['myTab']->value)."-featured", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              </div>   
			  <?php }?>	
			 
			</div></div>
        
		
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
 .carousel').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
 
	$("#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
 .nav-tabs li", this).first().addClass("active");
	$("#<?php echo $_smarty_tpl->tpl_vars['myTab']->value;?>
 .tab-content .tab-pane", this).first().addClass("active");
 
});
</script>
 <?php }} ?>
