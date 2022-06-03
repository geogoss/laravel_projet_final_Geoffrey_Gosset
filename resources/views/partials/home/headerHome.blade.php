   <!-- HEADER-AREA START -->
   <header id="sticky-menu" class="header">
       <div class="header-area">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-md-4 offset-md-4 col-7">
                       <div class="logo text-md-center">
                           <a href="index.html"><img src="{{ asset('img/logo/logo.png') }} " alt="" /></a>
                       </div>
                   </div>
                   <div class="col-md-4 col-5">
                       <div class="mini-cart text-end">
                           <ul>
                               <li>
                                   <a class="cart-icon" href="#">
                                       <i class="zmdi zmdi-shopping-cart"></i>
                                       <span>3</span>
                                   </a>
                                   <div class="mini-cart-brief text-left">
                                       <div class="cart-items">
                                           <p class="mb-0">You have <span>03 items</span> in your shopping bag
                                           </p>
                                       </div>
                                    
                                       {{-- @php
                                       use App\Models\CardProduct;
                                       use Illuminate\Support\Facades\Auth;

                                           $cards = CardProduct::where('card_id', Auth::user()->card->id)->get();
                                       @endphp

                                       <div class="all-cart-product clearfix">
                                           @foreach ($cards as $product)
                                               
                                           <div class="single-cart clearfix">
                                               <div class="cart-photo">
                                                  
                                                       <a href="#"><img src="{{asset('thumbnail/images/270x270/'.$product->product->image[0]->src)}} " alt="" /></a>
                                               </div>
                                               <div class="cart-info">
                                                   <h5><a href="#">{{$product->product->name}}</a></h5>
                                                   <p class="mb-0">Price : $ {{$product->product->price}}</p>
                                                   <p class="mb-0">Qty : {{$product->amount}} </p>
                                                   <span class="cart-delete"><a href="#"><i
                                                               class="zmdi zmdi-close"></i></a></span>
                                               </div>
                                           </div>
                                           @endforeach --}}
                                       <div class="cart-totals">
                                           <h5 class="mb-0">Total <span class="floatright">$500.00</span>
                                           </h5>
                                       </div>
                                       <div class="cart-bottom  clearfix">
                                           <a href="/cart" class="button-one floatleft text-uppercase"
                                               data-text="View cart">View cart</a>
                                           <a href="/checkout" class="button-one floatright text-uppercase"
                                               data-text="Check out">Check out</a>
                                       </div>
                                   </div>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- MAIN-MENU START -->
       <div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
           <div class="hamburger-box">
               <div class="hamburger-inner"></div>
           </div>
       </div>
       <div class="main-menu  d-none d-md-block">
           <nav>
               <ul>
                   <li><a href="/dashboard">Dashboard</a></li>
                   <li><a href="/">home</a></li>
                   <li><a href="/product">products</a></li>
                   <li><a href="/blog">blog</a></li>
                   <li><a href="/team">about us</a></li>
                   <li><a href="/contact">contact</a></li>
                   <li><a href="{{route('login')}} ">Login</a></li>
                   <!-- Authentication -->
                   <li>
                       <form method="POST" action="{{ route('logout') }}">
                           @csrf
                           <a href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                               {{ __('Log Out') }}
                           </a>
                       </form>                       
                   </li>
               </ul>
           </nav>
       </div>
       <!-- MAIN-MENU END -->
   </header>
   <!-- HEADER-AREA END -->
