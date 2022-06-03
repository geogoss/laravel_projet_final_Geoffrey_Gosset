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
                                   @if ($product->state == 'SALE')
                                       <span class="pro-label sale-label">{{ $product->state }}</span>
                                   @elseif ($product->state == 'NEW')
                                       <span class="pro-label new-label">{{ $product->state }} </span>
                                   @else
                                   @endif
                                   <a href="/product/{{ $product->id }} "><img
                                           src="{{ '/thumbnail/images/270x270/' . $product->image[0]->src }}"
                                           alt="" /></a>

                                   <div class="product-action clearfix">
                                       <a href="#" data-bs-toggle="modal"
                                           data-bs-target="#productModal{{ $product->id }}" title="Quick View"><i
                                               class="zmdi zmdi-zoom-in"></i></a>
                                       <form class="w-75 mx-auto text-white" action="/card" method="POST">
                                           @csrf
                                           <input name="productId" type="number" hidden value="{{ $product->id }}">
                                           <input name="qtybutton" type="number" id="french-hens" value="1" min="1"
                                               hidden>
                                           <button  type="submit"><a href="#"
                                                   data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                                       class="zmdi zmdi-shopping-cart-plus"></i></a></button>
                                       </form>
                                   </div>
                               </div>
                               <div class="product-info clearfix">
                                   <div class="fix">
                                       <h4 class="post-title floatleft"><a href="#">{{ $product->name }} </a>
                                       </h4>
                                       <p class="floatright hidden-sm d-none d-md-block">
                                           {{ $product->type->name }}</p>
                                   </div>
                                   <div class="fix">
                                       <span class="pro-price floatleft">{{ $product->price }} €</span>
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

   @foreach ($products as $product)
       @include('partials.home.quickviewProductHome')
   @endforeach
