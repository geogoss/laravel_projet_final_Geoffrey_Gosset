   <!-- BLGO-AREA START -->
   <div class="blog-area blog-2 blog-details-area  pt-80 pb-80">
       <div class="container">
           <div class="blog">
               <div class="row">
                   <!-- Single-blog start -->
                   <div class="col-lg-12">
                       <div class="single-blog mb-30">
                           <div class="blog-photo">
                               <a href="#"><img src="{{ asset('images/1090x450/' . $article->blog->src) }} "
                                       alt="" /></a>
                               <div class="like-share fix">
                                   <a href="#"><i
                                           class="zmdi zmdi-account"></i><span>{{ $article->user->name }}</span></a>
                                   <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                                   <a href="#"><i
                                           class="zmdi zmdi-comments"></i><span>{{ $article->comment->count() }}
                                           comments</span></a>
                               </div>
                               <div class="post-date post-date-2">
                                   <span class="text-dark-red">{{ $article->dayMonth }}</span>
                                   <span class="text-dark-red text-uppercase">{{ $article->month }}</span>
                               </div>
                           </div>
                           <div class="blog-info blog-details-info">
                               <h4 class="post-title post-title-2"><a href="#">{{ $article->title }}</a></h4>
                               <p>{{ $article->content1 }}</p>
                               <p>{{ $article->content2 }}</p>
                               <div class="post-share-tag clearfix mt-40">
                                   <div class="post-share floatleft">
                                       <span class="text-uppercase"><strong>Share</strong></span>
                                       <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                       <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                       <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                       <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                       <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                       <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                   </div>

                                   <div class="post-share post-tag floatright">
                                       <span class="text-uppercase"><strong>tags</strong></span>
                                       @foreach ($article->tag as $item)
                                           <a href="#">{{ $item->name }}</a>
                                       @endforeach
                                   </div>
                               </div>
                               <div class="pro-reviews mt-60">
                                   <div class="customer-review mb-60">
                                       <h3 class="tab-title title-border mb-30">Customer comments</h3>
                                       <ul class="product-comments clearfix">
                                           <li class="mb-30">
                                               <div class="pro-reviewer">
                                                   <img src="{{ asset('images/personnes/moi.jpg') }} " alt="" />
                                               </div>
                                               <div class="pro-reviewer-comment">
                                                   <div class="fix">
                                                       <div class="floatleft mbl-center">
                                                           <h5 class="text-uppercase mb-0"><strong>{{$article->comment[0]->author}}</strong></h5>
                                                           <p class="reply-date">{{$article->comment[0]->dayMonth}} {{$article->comment[0]->month}}, {{$article->comment[0]->year}} at {{$article->comment[0]->hour}}{{$article->comment[0]->pm}}</p>
                                                       </div>
                                                       <div class="comment-reply floatright">
                                                           <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                           <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                       </div>
                                                   </div>
                                                   <p class="mb-0">{{$article->comment[0]->content}}</p>
                                               </div>
                                           </li>
										   @foreach ($article->comment as $item)
                                           <li class="threaded-comments">
                                               <div class="pro-reviewer">
                                                   <img src="{{ asset('images/personnes/'.$item->foto->src) }} " alt="" />
                                               </div>
                                               <div class="pro-reviewer-comment">
                                                   <div class="fix">
                                                       <div class="floatleft mbl-center">
                                                           <h5 class="text-uppercase mb-0"><strong>{{$item->author}}</strong></h5>
                                                           <p class="reply-date">{{$item->dayMonth}} {{$item->month}}, {{$item->year}} at {{$item->hour}} {{$item->pm}}</p>
                                                       </div>
                                                       <div class="comment-reply floatright">
                                                           <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                           <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                       </div>
                                                   </div>
                                                   <p class="mb-0">{{$item->content}}</p>
                                               </div>
                                           </li>
											   
										   @endforeach
                                       </ul>
                                   </div>
                                   <div class="leave-review">
                                       <h3 class="tab-title title-border mb-30">Leave your reviw</h3>
                                       <div class="reply-box">
                                           <form action="#">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Your name here..." name="name" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <input type="text" placeholder="Your email here..."
                                                           name="email" />
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
                       </div>
                   </div>
                   <!-- Single-blog end -->
               </div>
           </div>
       </div>
   </div>
   <!-- BLGO-AREA END -->
