			<!-- PRODUCT-AREA START -->
			<div class="product-area pt-80 pb-35">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">Featured Products</h2>
							</div>
							<div class="product-slider style-1 arrow-left-right">
								@foreach ($products as $product)
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										{{-- condition pour afficher les étiquette 'NEW' ou 'SALE' --}}
										@if ($product->product->state == 'SALE')
										<span class="pro-label sale-label">{{$product->product->state}}</span>
										@elseif ($product->product->state == 'NEW')
										<span class="pro-label new-label">{{$product->product->state}} </span>
										@else
										@endif
										<a href="single-product.html"><img src="{{'images/270x270/'.$product->src}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>										
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">{{$product->product->name}} </a></h4>
											<p class="floatright hidden-sm d-none d-md-block">{{$product->product->type->name}}</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">{{$product->product->price}} €</span>
										</div>
									</div>
								</div>
									
								@endforeach
								<!-- Single-product end -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PRODUCT-AREA END -->
