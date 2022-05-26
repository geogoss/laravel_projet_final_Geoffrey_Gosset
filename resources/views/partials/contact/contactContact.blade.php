   <!-- contact-us-AREA START -->
   <div class="contact-us-area  pt-80 pb-80">
       <div class="container">
           <div class="contact-us customer-login bg-white">
               <div class="row">
                   <div class="col-lg-4 col-md-5">
                       <div class="contact-details">
                           <h4 class="title-1 title-border text-uppercase mb-30">contact details</h4>
                           <ul>
                               <li>
                                   <i class="zmdi zmdi-pin"></i>
                                   <span>{{ $infos[0]->address1 }}</span>
                                   <span>{{ $infos[0]->address2 }}</span>
                               </li>
                               <li>
                                   <i class="zmdi zmdi-phone"></i>
                                   <span>{{ $infos[0]->phone }}</span>
                               </li>
                               <li>
                                   <i class="zmdi zmdi-email"></i>
                                   <span>{{ $infos[0]->email }}</span>
                                   @if (Auth::check())
                                       <span>{{ Auth::user()->email }}</span>
                                   @endif
                               </li>
                           </ul>
                       </div>
                       <div class="send-message mt-60">
                           <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                               <h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
                               <input type="text" name="con_name" placeholder="Your name here..." />
                               <input type="text" name="con_email" placeholder="Your email here..." />
                               <textarea class="custom-textarea" name="con_message" placeholder="Your comment here..."></textarea>
                               <button class="button-one submit-button mt-20" data-text="submit message"
                                   type="submit">submit message</button>
                               <p class="form-message"></p>
                           </form>
                       </div>
                   </div>
                   <div class="col-lg-8 col-md-7 mt-xs-30">
                       <div class="map-area">
                           <div id="googleMap" style="width:100%;height:600px;"></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
