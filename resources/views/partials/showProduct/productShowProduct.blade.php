   <!-- PRODUCT-AREA START -->
   <div class="product-area single-pro-area pt-80 pb-80 product-style-2">
       <div class="container">
           <div class="row shop-list single-pro-info no-sidebar">
               <!-- Single-product start -->
               <div class="col-lg-12">
                   <div class="single-product clearfix">
                       <!-- Single-pro-slider Big-photo start -->
                       <div class="single-pro-slider single-big-photo view-lightbox slider-for">
                           {{-- Groose image du show --}}
                           <img src="{{ asset('images/370x450/' . $product->image[0]->src) }} " alt="" />
                           <a class="view-full-screen" href="{{ asset('images/370x450/' . $product->image[0]->src) }} "
                               data-lightbox="roadtrip" data-title="My caption">
                               <i class="zmdi zmdi-zoom-in"></i>
                           </a>
                       </div>
                       <!-- Single-pro-slider Big-photo end -->
                       <div class="product-info">
                           <div class="fix">
                               <h4 class="post-title floatleft">{{ $product->name }} </h4>
                           </div>
                           <div class="fix mb-20">
                               @if ($product->discount == 0)
                                   <span class="pro-price">{{ $product->price }}
                                       €</span>
                               @else
                                   <span class="pro-price">{{ $product->discount }}
                                       €</span>
                                   <span class="old-price font-16px ml-10"><del>{{ $product->price }}
                                           € </del></span>
                               @endif

                           </div>
                           <div class="product-description">
                               <p>{{ $product->description }} </p>
                           </div>
                           <!-- Size start -->
                           <div class="size-filter single-pro-size mb-35 clearfix">
                               <ul>
                                   <li><span class="color-title text-capitalize">size</span></li>
                                   <li><a href="#">{{ $product->size->name }} </a></li>
                               </ul>
                           </div>
                           <!-- Size end -->
                           <div class="clearfix">
                               <div class="cart-plus-minus">
                                   <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                               </div>
                               <div class="product-action clearfix">
                                   <a href="#" data-bs-toggle="modal"
                                       data-bs-target="#productModal{{ $product->id }} " title="Quick View"><i
                                           class="zmdi zmdi-zoom-in"></i></a>
                                   <a href="cart.html" data-bs-toggle="tooltip" data-placement="top"
                                       title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                               </div>
                           </div>
                           <!-- Single-pro-slider Small-photo start -->
                           <div class="single-pro-slider single-sml-photo slider-nav">
                               @foreach ($details as $detail)
                                   <div>
                                       <img src="{{ asset('images/70x83/' . $detail->src) }} " alt="" />
                                   </div>
                               @endforeach

                           </div>
                           <!-- Single-pro-slider Small-photo end -->
                       </div>
                   </div>
               </div>
               <!-- Single-product end -->
           </div>
           <!-- single-product-tab start -->
           <div class="single-pro-tab">
               <div class="row">
                   <div class="col-md-3">
                       <div class="single-pro-tab-menu">
                           <!-- Nav tabs -->
                           <ul class="nav d-block">
                               <li><a href="#description" data-bs-toggle="tab">Description</a></li>
                               <li><a class="active" href="#reviews" data-bs-toggle="tab">Reviews</a></li>
                               <li><a href="#information" data-bs-toggle="tab">Information</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-9">
                       <!-- Tab panes -->
                       <div class="tab-content">
                           <div class="tab-pane" id="description">
                               <div class="pro-tab-info pro-description">
                                   <h3 class="tab-title title-border mb-30">dummy Product name</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                               </div>
                           </div>
                           <div class="tab-pane active" id="reviews">
                               <div class="pro-tab-info pro-reviews">
                                   <div class="customer-review mb-60">
                                       <h3 class="tab-title title-border mb-30">Customer review</h3>
                                       <ul class="product-comments clearfix">
                                           
                                           @foreach ($notes as $item)
                                               <li class="{{$loop->iteration == 1 ? 'mb-30' : 'threaded-comments' }} ">
                                                   <div class="pro-reviewer">
                                                       <img src="{{ asset('images/personnes/'.$item->foto->src) }} " alt="" />
                                                   </div>
                                                   <div class="pro-reviewer-comment">
                                                       <div class="fix">
                                                           <div class="floatleft mbl-center">
                                                               <h5 class="text-uppercase mb-0"><strong>{{$item->author}} </strong></h5>
                                                               <p class="reply-date">{{$item->created_at->format('d')}} {{$item->created_at->format('F')}}, {{$item->created_at->format('o')}} at {{$item->created_at->format('H')}} {{$item->created_at->format('a')}}</p>
                                                           </div>
                                                           <div class="comment-reply floatright">
                                                               <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                               <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                           </div>
                                                       </div>
                                                       <p class="mb-0">{{$item->content}} </p>
                                                   </div>
                                               </li>
                                           @endforeach


                                       </ul>
                                   </div>
                                   <div class="leave-review">
                                       <h3 class="tab-title title-border mb-30">Leave your review</h3>

                                       <div class="reply-box">
                                           <form action="#">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Your name here..." name="name" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Subject..." name="name" />
                                                   </div>
                                               </div>
                                               <div class="row">
                                                   <div class="col-md-12">
                                                       <textarea class="custom-textarea" name="message" placeholder="Your review here..."></textarea>
                                                       <button type="submit" data-text="submit review"
                                                           class="button-one submit-button mt-20">submit review</button>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane" id="information">
                               <div class="pro-tab-info pro-information">
                                   <h3 class="tab-title title-border mb-30">Product information</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                       elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                       messages in con sectetur posuere dolor non.</p>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
           <!-- single-product-tab end -->
       </div>
   </div>
   <!-- PRODUCT-AREA END -->

   @include('partials.shop.quickviewProductShop')
