   <!-- SLIDER-BANNER-AREA START -->
   <section class="slider-banner-area clearfix">
       <!-- Sidebar-social-media start -->
       <div class="sidebar-social d-none d-md-block">
           <div class="table">
               <div class="table-cell">
                   <ul>
                       <li><a href="#" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
                       <li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                       <li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                       <li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- Sidebar-social-media start -->
       <div class="banner-left floatleft">
           <!-- Slider-banner start -->
           <div class="slider-banner">

               @if ($stars == null)
               {{-- {{dd($test[0]->image[0]->src)}} --}}
               <a href="/product/{{ $starlette[5]->id }} ">
                   <div class="single-banner banner-1">
                       <a class="banner-thumb" href="/product/{{ $starlette[5]->id }} ">
                           <img src="{{ '/thumbnail/images/450x375/' . $starlette[5]->image[0]->src }} " alt="" />
                       </a>
                       <span class="pro-label new-label">new</span>
                       <span class="price">{{ $starlette[5]->price }} $</span>
                       <div class="banner-brief">
                           <h2 class="banner-title"><a href="#">{{ $starlette[5]->name }}</a></h2>
                           <p class="mb-0">{{ $starlette[5]->type->name }}</p>
                       </div>
                       <a href="/product/{{ $starlette[5]->id }}" class="button-one font-16px" data-text="Buy now">Buy now</a>
                   </div>
               </a>
                   
               @else
                   <a href="/product/{{ $stars->id }} ">
                       <div class="single-banner banner-1">
                           <a class="banner-thumb" href="/product/{{ $stars->id }} ">
                               <img src="{{ '/thumbnail/images/450x375/' . $stars->image[0]->src }} " alt="" />
                           </a>
                           <span class="pro-label new-label">new</span>
                           <span class="price">{{ $stars->price }} $</span>
                           <div class="banner-brief">
                               <h2 class="banner-title"><a href="#">{{ $stars->name }}</a></h2>
                               <p class="mb-0">{{ $stars->type->name }}</p>
                           </div>
                           <a href="/product/{{ $stars->id }}" class="button-one font-16px" data-text="Buy now">Buy now</a>
                       </div>
                   </a>
               @endif
               {{-- {{dd($last)}}
               {{dd($stars)}} --}}
               <a href="/product/{{ $last->id }} ">
                   <div class="single-banner banner-2">
                       <a class="banner-thumb" href="/product/{{ $last->id }}">
                           {{-- @if ($last->id == null) --}}
                               {{-- <img src="{{ '/thumbnail/images/450x375/' . $products[1]->image->src }} " alt="" /> --}}
                           {{-- @else --}}
                               <img src="{{ '/thumbnail/images/450x375/' . $last->image[0]->src }}" alt="" />
                           {{-- @endif --}}

                       </a>
                       <div class="banner-brief">
                           <h2 class="banner-title"><a href="#">New Product 2021</a></h2>
                           <p class="hidden-md hidden-sm d-none d-md-block">Lorem Ipsum is simply dummy text of the
                               printing
                               and types sate industry. Lorem Ipsum has been the industry.</p>
                           <a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
                       </div>
                   </div>
               </a>
           </div>
           <!-- Slider-banner end -->
       </div>
       <div class="slider-right floatleft">
           <!-- Slider-area start -->
           <div class="slider-area">
               <div class="bend niceties preview-2">
                   <div id="ensign-nivoslider" class="slides">
                       {{-- {{dd($prems)}} --}}

                       <img src="{{ '/thumbnail/images/1220x800/' . $prems->src }} " alt=""
                           title="#slider-direction-1" />
                       @foreach ($diapos as $diapo)
                           {{-- utilisation de $loop->iteration pour le carousel elles passent toutes --}}
                           <img src="{{ '/thumbnail/images/1220x800/' . $diapo->src }} " alt=""
                               title="#slider-direction-{{ $loop->iteration + 1 }} " />
                       @endforeach
                   </div>
                   <!-- direction 1 -->
                   <div id="slider-direction-1" class="t-cn slider-direction">
                       <div class="slider-progress"></div>
                       <div class="slider-content t-lfl s-tb slider-1">
                           <div class="title-container s-tb-c title-compress">
                               <div class="layer-1">
                                   <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                       <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                   </div>
                                   <div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                       <h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
                                   </div>
                                   <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
                                       <h3 class="slider-title2 text-uppercase">gallery 2021</h3>
                                   </div>
                                   <div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
                                       <a href="#" class="button-one style-2 text-uppercase mt-20"
                                           data-text="Shop now">Shop now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- direction 2 -->
                   <div id="slider-direction-2" class="slider-direction">
                       <div class="slider-progress"></div>
                       <div class="slider-content t-lfl s-tb slider-1">
                           <div class="title-container s-tb-c title-compress">
                               <div class="layer-1">
                                   <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                       <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                   </div>
                                   <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                       <h2 class="slider-title1 text-uppercase">furniture</h2>
                                   </div>
                                   <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                                       <p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum
                                           available, but the majority have suffered alteration in some form, by
                                           injected humour, or randomised words which don't look even slightly
                                           believable</p>
                                   </div>
                                   <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                                       <a href="#" class="button-one style-2 text-uppercase mt-20"
                                           data-text="Shop now">Shop now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- direction 3 -->
                   <div id="slider-direction-3" class="slider-direction">
                       <div class="slider-progress"></div>
                       <div class="slider-content t-lfl s-tb slider-1">
                           <div class="title-container s-tb-c title-compress">
                               <div class="layer-1">
                                   <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                       <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                   </div>
                                   <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                       <h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
                                   </div>
                                   <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                                       <h3 class="slider-title2 text-uppercase">gallery 2021</h3>
                                   </div>
                                   <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                                       <p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum
                                           available, but the majority have suffered alteration in some form, by
                                           injected humour, or randomised words which don't look even slightly
                                           believable</p>
                                   </div>
                                   <div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
                                       <a href="#" class="button-one style-2 text-uppercase mt-20"
                                           data-text="Shop now">Shop now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Slider-area end -->
       </div>
       <!-- Sidebar-social-media start -> formulaire de connexion -> en hover sur le login -->
       <div class="sidebar-account d-none d-md-block">
           <div class="table">
               <div class="table-cell">
                   <ul>
                       <li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a></li>
                       <li><a href="/login" title="Login"><i class="zmdi zmdi-lock"></i></a>
                           <div class="customer-login text-left">
                               <form method="POST" action="{{ route('login') }}" class="col-lg-6">
                                   @csrf
                                   <h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
                                   <p class="text-gray">If you have an account with us, Please login!</p>
                                   <input type="text" name="email" placeholder="Email here..." />
                                   <input name="password" type="password" placeholder="Password" />
                                   <p><a class="text-gray" href="#">Forget your password?</a></p>
                                   <button class="button-one submit-button mt-15" data-text="login"
                                       type="submit">login</button>
                                   {{-- <button type="button" class="button-one submit-button mt-15" data-text="register" onclick="window.location.href='/login'" >register</button> --}}
                                   {{-- lien javaScript pour transformer un bouton en lien alors qu'il est dans le form, je le laisse pour l'info --}}
                               </form>
                           </div>
                       </li>
                       <li>
                           <a href="/login" title="register">
                               <svg style="width:17px;height:17px" viewBox="0 0 24 24">
                                   <path fill="currentColor"
                                       d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M6,10V7H4V10H1V12H4V15H6V12H9V10M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12Z" />
                               </svg>
                           </a>
                           <div class="customer-login text-left">
                               <form method="POST" action="{{ route('register') }}" class="col-lg-6">
                                   @csrf
                                   <h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
                                   <p class="text-gray">If you have an account with us, Please login!</p>
                                   <input type="text" placeholder="Your name here..." name="name">
                                   <input type="text" placeholder="Email address here..." name="email">
                                   <input name="password" type="password" placeholder="Password">
                                   <input name="password_confirmation" type="password" placeholder="Confirm password">
                                   <p class="mb-0">
                                       <input type="checkbox" id="newsletter" name="newsletter" checked>
                                       <label for="newsletter"><span>Sign up for our newsletter!</span></label>
                                   </p>
                                   <button type="submit" data-text="regiter"
                                       class="button-one submit-button mt-15">register</button>
                               </form>
                           </div>
                       </li>
                       <li><a href="/myaccount" title="My-Account"><i class="zmdi zmdi-account text-left"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- Sidebar-social-media start -->
   </section>
   <!-- End Slider-section -->
