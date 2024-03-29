   <!-- MY-ACCOUNT-AREA START -->
   <div class="my-account-area  pt-80 pb-80">
       <div class="container">
           <div class="my-account">
               <div class="row">
                   <div class="col-md-6">
                       <div class="panel-group" id="accordion">
                           <div class="panel mb-2">
                               <div class="my-account-menu">
                                   <a data-bs-toggle="collapse" href="#my-info">
                                       My Personal Information
                                   </a>
                               </div>
                               <div id="my-info" class="panel-collapse collapse show" data-bs-parent="#accordion">
                                   <div class="panel-body">
                                       <div class="billing-details shop-cart-table">
                                           <form action="/user/{{ Auth::user()->id }}" method="POST">
                                               @csrf
                                               @method('PUT')
                                               <input type="text" value="{{ Auth::user()->name }}">
                                               <input type="text" value="{{ Auth::user()->email }}">
                                               <input type="text" value="{{ Auth::user()->phone }}">
                                               <input type="text" value="{{ Auth::user()->company }}">
                                               <select class="custom-select mb-15">
                                                   @foreach ($countries as $country)
                                                       <option
                                                           {{ Auth::user()->country_id == $country->id ? 'selected' : '' }}
                                                           value="{{ $country->id }} ">{{ $country->name }}
                                                       </option>
                                                   @endforeach
                                               </select>
                                               <select class="custom-select mb-15">
                                                   @foreach ($states as $state)
                                                       <option
                                                           {{ Auth::user()->state_id == $state->id ? 'selected' : '' }}
                                                           value="{{ $state->id }} ">{{ $state->name }}
                                                       </option>
                                                   @endforeach
                                               </select>
                                               <select class="custom-select mb-15">
                                                   @foreach ($cities as $city)
                                                       <option
                                                           {{ Auth::user()->city_id == $city->id ? 'selected' : '' }}
                                                           value="{{ $city->id }} ">{{ $city->name }}
                                                       </option>
                                                   @endforeach
                                               </select>
                                               <textarea value="{{ Auth::user()->address }}" class="custom-textarea"></textarea>

                                               <div class="mt-20">
                                                   <button type="submit" data-text="subscribe"
                                                       class="submit-button submit-btn-2 button-one">subscribe</button><br>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="panel mb-2">
                               <div class="my-account-menu">
                                   <a class="collapsed" data-bs-toggle="collapse" href="#my-billing">
                                       My Billing address
                                   </a>
                               </div>
                               <div id="my-billing" class="panel-collapse collapse" data-bs-parent="#accordion">
                                   <div class="panel-body">
                                       <div class="billing-details shop-cart-table">
                                           <input type="text" value="{{ Auth::user()->billing->name }}">
                                           <input type="text" value="{{ Auth::user()->billing->email }}">
                                           <input type="text" value="{{ Auth::user()->billing->phone }}">
                                           <input type="text" value="{{ Auth::user()->billing->company }}">
                                           <select class="custom-select mb-15">
                                               @foreach ($countries as $country)
                                                   <option
                                                       {{ Auth::user()->billing->country->name == $country->name ? 'selected' : '' }}
                                                       value="{{ $country->id }} ">{{ $country->name }}
                                                   </option>
                                               @endforeach
                                           </select>
                                           <select class="custom-select mb-15">
                                               @foreach ($states as $state)
                                                   <option
                                                       {{ Auth::user()->billing->state_id == $state->id ? 'selected' : '' }}
                                                       value="{{ $state->id }} ">{{ $state->name }} </option>
                                               @endforeach
                                           </select>
                                           <select class="custom-select mb-15">
                                               @foreach ($cities as $city)
                                                   <option
                                                       {{ Auth::user()->billing->city_id == $city->id ? 'selected' : '' }}
                                                       value="{{ $city->id }} ">{{ $city->name }} </option>
                                               @endforeach
                                           </select>
                                           <textarea value="{{ Auth::user()->billing->address }}" class="custom-textarea"></textarea>
                                           
                                           <div class="mt-20">
                                               <button type="submit" data-text="subscribe"
                                                   class="submit-button submit-btn-2 button-one">subscribe</button><br>
                                           </div>

                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="panel mb-2 mb-md-0">
                               <div class="my-account-menu">
                                   <a class="collapsed" data-bs-toggle="collapse" href="#my-order">
                                       Order history and details
                                   </a>
                               </div>
                               <div id="my-order" class="panel-collapse collapse" data-bs-parent="#accordion">
                                   <div class="panel-body">
                                       <div class="our-order payment-details shop-cart-table">
                                           <table>
                                               <thead>
                                                   <tr>
                                                       <th><strong>Product</strong></th>
                                                       <th class="text-end"><strong>Total</strong></th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td>Dummy Product Name x 2</td>
                                                       <td class="text-end">$86.00</td>
                                                   </tr>
                                                   <tr>
                                                       <td>Dummy Product Name x 1</td>
                                                       <td class="text-end">$69.00</td>
                                                   </tr>
                                                   <tr>
                                                       <td>Cart Subtotal</td>
                                                       <td class="text-end">$155.00</td>
                                                   </tr>
                                                   <tr>
                                                       <td>Shipping and Handing</td>
                                                       <td class="text-end">$15.00</td>
                                                   </tr>
                                                   <tr>
                                                       <td>Vat</td>
                                                       <td class="text-end">$00.00</td>
                                                   </tr>
                                                   <tr>
                                                       <td>Order Total</td>
                                                       <td class="text-end">$170.00</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="panel-group" id="accordion-2">
                           <div class="panel mb-2">
                               <div class="my-account-menu">
                                   <a data-bs-toggle="collapse" href="#my-payment-method">
                                       My Payment Method
                                   </a>
                               </div>
                               <div id="my-payment-method" class="panel-collapse collapse show"
                                   data-bs-parent="#accordion-2">
                                   <div class="panel-body">
                                       <div class="payment-method  shop-cart-table">
                                           <div class="payment-accordion">
                                               <!-- Accordion start  -->
                                               <h3 class="payment-accordion-toggle active">Direct Bank Transfer</h3>
                                               <div class="payment-content default">
                                                   <p>Make your payment directly into our bank account. Please use your
                                                       Order ID as the payment reference. Your order won't be shipped
                                                       until the funds have cleared in our account.</p>
                                               </div>
                                               <!-- Accordion end -->
                                               <!-- Accordion start -->
                                               <h3 class="payment-accordion-toggle">Cheque Payment</h3>
                                               <div class="payment-content">
                                                   <p>Please send your cheque to Store Name, Store Street, Store Town,
                                                       Store State / County, Store Postcode.</p>
                                               </div>
                                               <!-- Accordion end -->
                                               <!-- Accordion start -->
                                               <h3 class="payment-accordion-toggle">PayPal</h3>
                                               <div class="payment-content">
                                                   <p>Pay via PayPal; you can pay with your credit card if you don�t
                                                       have a PayPal account.</p>
                                                   <a href="#"><img alt=""
                                                           src="{{ asset('img/payment/1.png') }} "></a>
                                                   <a href="#"><img alt=""
                                                           src="{{ asset('img/payment/2.png') }} "></a>
                                                   <a href="#"><img alt=""
                                                           src="{{ asset('img/payment/3.png') }} "></a>
                                                   <a href="#"><img alt=""
                                                           src="{{ asset('img/payment/4.png') }} "></a>
                                               </div>
                                               <!-- Accordion end -->
                                               <button type="submit" data-text="place order"
                                                   class="button-one submit-button mt-15">place order</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="panel">
                               <div class="my-account-menu my-account-menu-2">
                                   <a href="wishlist.html">
                                       My Wishlist
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- MY-ACCOUNT-CART-AREA END -->
