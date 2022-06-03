   <!-- SHOPPING-CART-AREA START -->
   <div class="shopping-cart-area  pt-80 pb-80">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="shopping-cart">
                       <!-- Nav tabs -->
                       <ul class="cart-page-menu nav row clearfix mb-30">
                           <li><a class="active" href="#shopping-cart" data-bs-toggle="tab">shopping cart</a>
                           </li>
                           <li><a>check out</a></li>
                           <li><a>order complete</a></li>
                       </ul>

                       <!-- Tab panes -->
                       <div class="tab-content">
                           <!-- shopping-cart start -->
                           <div class="tab-pane active" id="shopping-cart">
                               <div action="#">
                                   <div class="shop-cart-table">
                                       <div class="table-content table-responsive">
                                           <table>
                                               <thead>
                                                   <tr>
                                                       <th class="product-thumbnail">Product</th>
                                                       <th class="product-price">Price</th>
                                                       <th class="product-quantity">Quantity</th>
                                                       <th class="product-subtotal">Total</th>
                                                       <th class="product-remove">Remove</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   {{-- @if (Auth::check()) --}}
                                                   @php
                                                       use App\Models\CardProduct;
                                                       use Illuminate\Support\Facades\Auth;
                                                       if (Auth::check()) {
                                                           $cards = CardProduct::where('card_id', Auth::user()->card->id)->orderBy('id', 'desc')->get();
                                                       } else {
                                                           $cards = [];
                                                       }
                                                       $sum = 0;
                                                       $quantity = 1;
                                                       
                                                       foreach ($cards as $item) {
                                                           if ($item->card->user->id == Auth::user()->id) {
                                                               $sum += $item->product->price * $item->amount;
                                                           }
                                                       }
                                                       
                                                   @endphp
                                                   @foreach ($cards as $item)
                                                       <tr>
                                                           <td class="product-thumbnail  text-left">
                                                               <!-- Single-product start -->
                                                               <div class="single-product">
                                                                   <div class="product-img">
                                                                       <a href="#	"><img
                                                                               src="{{ asset('thumbnail/images/270x270/' . $item->product->image[0]->src) }} "
                                                                               alt="" /></a>
                                                                   </div>
                                                                   <div class="product-info">
                                                                       <h4 class="post-title"><a
                                                                               class="text-light-black"
                                                                               href="#">{{ $item->product->name }}</a>
                                                                       </h4>
                                                                       <p class="mb-0">Color : Black</p>
                                                                       <p class="mb-0">Size :
                                                                           {{ $item->product->size->name }}</p>
                                                                   </div>
                                                               </div>
                                                               <!-- Single-product end -->
                                                           </td>
                                                           <td class="product-price">$
                                                               {{ $item->product->price }}
                                                           </td>

                                                           <td class="product-quantity">
                                                               <form class="w-75 mx-auto text-white"
                                                                   action="cardProduct/{{ $item->id }}"
                                                                   method="POST">
                                                                   @csrf
                                                                   @method('PUT')
                                                                   <div class="cart-plus-minus">

                                                                       <input type="text" value="{{ $item->amount }} "
                                                                           name="name" class="cart-plus-minus-box">
                                                                   </div>
                                                                   <button type="submit">update</button>

                                                               </form>
                                                           </td>
                                                           <td class="product-subtotal">
                                                               ${{ $item->product->price * $item->amount }} </td>
                                                           <td class="product-remove">
                                                               {{-- <form action="/cardProduct/{{ $item->id }} ">
                                                                   <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                               </form> --}}
                                                               <form action="/cardProduct/{{ $item->id }}"
                                                                   method="POST">
                                                                   @csrf
                                                                   @method('DELETE')
                                                                   <button type="submit" class=" mx-2"><i
                                                                           class="zmdi zmdi-close"></i></button>
                                                               </form>
                                                           </td>
                                                       </tr>
                                                   @endforeach
                                
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="customer-login mt-30">
                                               <h4 class="title-1 title-border text-uppercase">coupon discount</h4>
                                               <p class="text-gray">Enter your coupon code if you have one!</p>
                                               <input type="text" placeholder="Enter your code here.">
                                               <button type="submit" data-text="apply coupon"
                                                   class="button-one submit-button mt-15">apply coupon</button>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="customer-login payment-details mt-30">
                                               <h4 class="title-1 title-border text-uppercase">payment details</h4>
                                               <table>
                                                   <tbody>
                                                       <tr>
														   {{-- {{dd($panier)}} --}}
                                                           <td class="text-left">Cart Subtotal</td>
                                                           <td class="text-end">${{$total - number_format($total / 121 * 21, 2)}}</td>
                                                       </tr>
                                                       
                                                       <tr>
                                                           <td class="text-left">Vat</td>
                                                           <td class="text-end">${{number_format($total / 121 * 21, 2)}}</td>
                                                       </tr>
                                                       <tr>
                                                           <td class="text-left">Order Total</td>
                                                           <td class="text-end">${{$total}} </td>
                                                       </tr>
                                                   </tbody>
                                               </table>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- shopping-cart end -->
                           <!-- check-out end -->
                       </div>
                       <button type="submit" data-text="proceed-checkout" class="button-one submit-button mt-15">PROCEED
                           CHECK OUT</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- SHOPPING-CART-AREA END -->
