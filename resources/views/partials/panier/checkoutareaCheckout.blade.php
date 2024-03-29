   <!-- CHECKOUT-AREA START -->
   <div class="shopping-cart-area  pt-80 pb-80">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="shopping-cart">
                       <!-- Nav tabs -->
                       <ul class="cart-page-menu nav row clearfix mb-30">
                           <li><a>shopping cart</a></li>
                           <li><a class="active" href="#check-out" data-bs-toggle="tab">check out</a></li>
                           <li><a>order complete</a></li>
                       </ul>

                       <!-- Tab panes -->
                       <div class="tab-content">
                           <!-- check-out start -->
                           <div class="tab-pane active" id="check-out">
                               <form action="#">
                                   <div class="shop-cart-table check-out-wrap">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="billing-details pr-20">
                                                   <h4 class="title-1 title-border text-uppercase mb-30">billing details
                                                   </h4>
                                                   @if (Auth::check() && Auth::user()->billing != null)
                                                       <input type="text"
                                                           value="{{ Auth::user()->billing->name }}">
                                                       <input type="text"
                                                           value="{{ Auth::user()->billing->email }}">
                                                       <input type="text"
                                                           value="{{ Auth::user()->billing->phone }}">
                                                       <input type="text"
                                                           value="{{ Auth::user()->billing->company }}">
                                                       <select class="custom-select mb-15">
                                                           @foreach ($countries as $country)
                                                               <option
                                                                   {{Auth::user()->billing->country != null && Auth::user()->billing->country->name == $country->name ? 'selected' : '' }}
                                                                   value="{{ $country->id }} ">{{ $country->name }}
                                                               </option>
                                                           @endforeach
                                                       </select>
                                                       <select class="custom-select mb-15">
                                                           @foreach ($states as $state)
                                                               <option
                                                                   {{Auth::user()->billing->state != null && Auth::user()->billing->state_id == $state->id ? 'selected' : '' }}
                                                                   value="{{ $state->id }} ">{{ $state->name }}
                                                               </option>
                                                           @endforeach
                                                       </select>
                                                       <select class="custom-select mb-15">
                                                           @foreach ($cities as $city)
                                                               <option
                                                                   {{Auth::user()->billing->city != null && Auth::user()->billing->city_id == $city->id ? 'selected' : '' }}
                                                                   value="{{ $city->id }} ">{{ $city->name }}
                                                               </option>
                                                           @endforeach
                                                       </select>
                                                       <textarea placeholder="{{ Auth::user()->billing->address }}" class="custom-textarea"></textarea>
                                                   @else
                                                       <input type="text" placeholder="Your name here...">
                                                       <input type="text" placeholder="Email address here...">
                                                       <input type="text" placeholder="Phone here...">
                                                       <input type="text" placeholder="Company neme here...">
                                                       <select class="custom-select mb-15">
                                                           @foreach ($countries as $country)
                                                               <option>{{ $country->name }} </option>
                                                           @endforeach
                                                       </select>
                                                       <select class="custom-select mb-15">
                                                           @foreach ($states as $state)
                                                               <option>{{ $state->name }} </option>
                                                           @endforeach
                                                       </select>
                                                       <select class="custom-select mb-15">
                                                           @foreach ($cities as $city)
                                                               <option>{{ $city->name }} </option>
                                                           @endforeach
                                                       </select>
                                                       <textarea placeholder="Your address here..." class="custom-textarea"></textarea>
                                                   @endif
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="our-order payment-details mt-60 pr-20">
                                                   <h4 class="title-1 title-border text-uppercase mb-30">our order</h4>
                                                   <table>
                                                       <thead>
                                                           <tr>
                                                               <th><strong>Product</strong></th>
                                                               <th class="text-end"><strong>Total</strong></th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                           @foreach ($cardProducts as $item)
                                                           <tr>
                                                               <td>{{$item->product->name}} x {{$item->amount}}</td>
                                                               <td class="text-end">${{$item->product->price * $item->amount}}</td>
                                                           </tr>
                                                               
                                                           @endforeach
                                                          
                                                           <tr>
                                                               <td>Cart Subtotal</td>
                                                               <td class="text-end">${{$total - number_format($total / 121 * 21, 2)}} </td>
                                                           </tr>
                                                           
                                                           <tr>
                                                               <td>Vat</td>
                                                               <td class="text-end">${{number_format($total / 121 * 21, 2)}}</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Order Total</td>
                                                               <td class="text-end">${{$total}}</td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                                   <button class="button-one submit-button mt-15"
                                                       data-text="place order" type="submit">order</button>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </form>
                           </div>
                           <!-- check-out end -->
                       </div>

                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- CHECKOUT-AREA END -->
