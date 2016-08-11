<?php /*%%SmartyHeaderCode:1466757ab3e27edf165-63017168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779ad5ab406899bc44c6c20e9383633af541e805' => 
    array (
      0 => 'C:\\xampp\\htdocs\\papeleria\\modules\\leomanagewidgets\\views\\widgets\\group.tpl',
      1 => 1470839831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466757ab3e27edf165-63017168',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6be888d384_32043223',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6be888d384_32043223')) {function content_57ab6be888d384_32043223($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-9 col-md-9 col-sm-9 col-xs-12 col-sp-12"
                            >
                                                                                                
  

    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12" id="slider">
                <div id="carousel-example-generic">
                    <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
                
            </ol>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                              <div class="item active " data-slide-number="0">
                                                          <img src="/papeleria/themes/ap_office/img/modules/leotempcp/image/slide3.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                           
                    </div>
                </div>
                              <div class="item  " data-slide-number="1">
                                                          <img src="/papeleria/themes/ap_office/img/modules/leotempcp/image/slide4.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                           
                    </div>
                </div>
                              <div class="item  " data-slide-number="2">
                                                          <img src="/papeleria/themes/ap_office/img/modules/leotempcp/image/slide1.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                          <h3>
                                                  Build your own bundle
                                              </h3>
                                        <p>Save up to $50</p>   
                    </div>
                </div>
                              <div class="item  " data-slide-number="3">
                                                          <img src="/papeleria/themes/ap_office/img/modules/leotempcp/image/slide2.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                          <h3>
                                                  Build your own bundle
                                              </h3>
                                        <p>Save up to $50</p>   
                    </div>
                </div>
                                      </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="fa fa-angle-right"></span>
            </a>
                    </div>
                </div>
          <!-- Controls -->

        </div>
   
    <!--/main slider carousel-->
</div>

  
<script type="text/javascript">

$('#myCarousel').carousel({
    interval: 6000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id^=carousel-selector-'+id+']').addClass('selected');
});

</script>                                                                                    </div>
                                                                                <div class="widget col-lg-3 col-md-3 col-sm-3 col-xs-12 col-sp-12 nopadding noborder custom_slide hidden-sp hidden-xs"
                            >
                                                                                                <div class="widget-html">
		<div class="block_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/papeleria/themes/ap_office/img/modules/leomanagewidgets/img-banner-1.jpg" alt="" /></a></div>
<div class="effect"><a href="#"><img class="img-responsive" src="/papeleria/themes/ap_office/img/modules/leomanagewidgets/img-banner-2.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                
<div class="products_block exclusive leomanagerwidgets" >
		<h4 class="page-subheading">
		<span>Mejor vendido</span>
	</h4>
		<div class="block_content">	
					<div class="carousel slide" id="leoproductcarousel126">
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/blusas/2-blusa.html" data-link="http://localhost/papeleria/blusas/2-blusa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/blusas/2-blusa.html" data-id-product="2" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/blusas/2-blusa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							31,32 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/blusas/2-blusa.html" title="Blusa" itemprop="url" >
					Blusa
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/blusas/2-blusa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" data-link="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" data-id-product="3" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							30,16 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" data-link="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
					Camiseta efecto desteñido de manga corta
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" data-link="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							35,38 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





			</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#leoproductcarousel126').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: 0
        });
    });
});
</script>
                                                                                    </div>
                                                                                <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12 nopadding noborder nomargin"
                            >
                                                                                                <div class="widget-html">
		<div class="block_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/papeleria/themes/ap_office/img/modules/leomanagewidgets/home1.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12 nopadding noborder nomargin"
                            >
                                                                                                <div class="widget-html">
		<div class="block_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/papeleria/themes/ap_office/img/modules/leomanagewidgets/home2.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                
<!-- MODULE Block specials -->
<div id="leoproducttab15863" class="products_block exclusive">
		<div class="block_content">			            
			<ul id="productTabs" class="nav nav-pills">
			  	
              <li><a href="#leoproducttab15863special" data-toggle="tab">Especial</a></li>
			                 	
              <li><a href="#leoproducttab15863newproducts" data-toggle="tab"><span></span>Nuevas adquisiciones</a></li>
			  			  			  	
              <li><a href="#leoproducttab15863featured" data-toggle="tab"><span></span>Productos destacados</a></li>
			              </ul>
			
            <div id="product_tab_content"><div class="product_tab_content tab-content">
			   	
					<div class="tab-pane" id="leoproducttab15863special">
										<div class="carousel slide" id="leoproducttab15863-special">
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





	              </div>
			   			  		  
              <div class="tab-pane" id="leoproducttab15863newproducts">
					 					<div class="carousel slide" id="leoproducttab15863-newproducts">
		 
	 	<a class="carousel-control left" href="#leoproducttab15863-newproducts"   data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#leoproducttab15863-newproducts"  data-slide="next">&rsaquo;</a>
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" data-link="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
					Camiseta efecto desteñido de manga corta
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/blusas/2-blusa.html" data-link="http://localhost/papeleria/blusas/2-blusa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/blusas/2-blusa.html" data-id-product="2" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/blusas/2-blusa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							31,32 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/blusas/2-blusa.html" title="Blusa" itemprop="url" >
					Blusa
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/blusas/2-blusa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" data-link="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" data-id-product="3" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							30,16 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="4"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/10-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="4"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" data-link="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" data-id-product="4" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							59,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido de noche estampado con mangas rectas, cinturón negro y volantes.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=4&amp;ipa=16&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
				<div class="item ">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" data-link="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							35,38 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





              </div>
			 	
			 	
			 		  
              <div class="tab-pane" id="leoproducttab15863featured">
					 					<div class="carousel slide" id="leoproducttab15863-featured">
		 
	 	<a class="carousel-control left" href="#leoproducttab15863-featured"   data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#leoproducttab15863-featured"  data-slide="next">&rsaquo;</a>
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" data-link="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
					Camiseta efecto desteñido de manga corta
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/camisetas/1-camiseta-destenida-manga-corta.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/blusas/2-blusa.html" data-link="http://localhost/papeleria/blusas/2-blusa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/blusas/2-blusa.html" data-id-product="2" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/blusas/2-blusa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							31,32 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/blusas/2-blusa.html" title="Blusa" itemprop="url" >
					Blusa
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/blusas/2-blusa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" data-link="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" data-id-product="3" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							30,16 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-informales/3-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="4"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/10-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="4"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" data-link="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" data-id-product="4" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							59,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido de noche estampado con mangas rectas, cinturón negro y volantes.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=4&amp;ipa=16&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-noche/4-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
				<div class="item ">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" data-link="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							35,38 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/6-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/papeleria/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/papeleria/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=757c826397c319f81e5dab5ea608569f" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/papeleria/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





              </div>   
			  	
			 
			</div></div>
        
		
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('#leoproducttab15863 .carousel').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: 0
        });
    });
 
	$("#leoproducttab15863 .nav-pills li", this).first().addClass("active");
	$("#leoproducttab15863 .tab-content .tab-pane", this).first().addClass("active");
 
});
</script>
                                                                                     </div>
                                                        </div>
    <?php }} ?>
