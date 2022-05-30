   <!-- SHOPPING-CART-AREA START -->
   <div class="login-area  pt-80 pb-80">
       <div class="container">
           <div>
               <div class="row">
                   <form method="POST" action="{{ route('login') }}" class="col-lg-6">
                       @csrf
                       <div class="customer-login text-left">
                           <h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
                           <p class="text-gray">If you have an account with us, Please login!</p>
                           <input type="text" placeholder="Email here..." name="email">
                           <input name="password" type="password" placeholder="Password">
                           <p><a href="#" class="text-gray">Forget your password?</a></p>
                           <button type="submit" data-text="login" class="button-one submit-button mt-15">login</button>
                       </div>
                   </form>

                   <form method="POST" action="{{ route('register') }}" class="col-lg-6" enctype="multipart/form-data">
                       @csrf
                       <div class="customer-login text-left">
                           <h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
                           <p class="text-gray">If you have an account with us, Please login!</p>
                           <input type="text" placeholder="Your name here..." name="name">

                           <input class="mb-3" type="file" name="file" >
    
                           <input type="text" placeholder="Email address here..." name="email">
                           <input name="password" type="password" placeholder="Password">
                           <input name="password_confirmation" type="password" placeholder="Confirm password">
                           <form action="/newsletter" method="POST">
                               @csrf
                               <p class="mb-0">
                                   <input type="checkbox" id="newsletter" name="newsletter" checked>
                                   <label for="newsletter"><span>Sign up for our newsletter!</span></label>
                                </p>

                           </form>
                           <button type="submit" data-text="register"
                               class="button-one submit-button mt-15">register</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!-- SHOPPING-CART-AREA END -->
