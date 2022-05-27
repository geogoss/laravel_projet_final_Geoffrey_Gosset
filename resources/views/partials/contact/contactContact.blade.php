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
                           <form id="" action="/message/send" method="POST">
                            @csrf
                               <h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
                               <input type="text" name="name" placeholder="Your name here..." />
                               <input type="text" name="email" placeholder="Your email here..." />
                               <textarea class="custom-textarea" name="message" placeholder="Your comment here..."></textarea>
                               <button class="button-one mt-20" data-text="submit message"
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
   @if (session()->has('text'))
	<p>{{ session('text') }}</p>
	@endif

	<form url="{{ route('send.message.google') }}" method="POST" >
		<label for="message" >Message</label>
		{{ @csrf_field() }}
		<p>
			<textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
			{{ $errors->first('message', ":message")}}
		</p>
		<button type="submit" >Envoyer</button>
	</form>
