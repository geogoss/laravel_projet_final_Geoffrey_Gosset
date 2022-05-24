   <!-- BLGO-AREA START -->
   <div class="blog-area pt-55">
       <div class="container">
           <!-- Section-title start -->
           <div class="row">
               <div class="col-lg-12">
                   <div class="section-title text-center">
                       <h2 class="title-border">From The Blog</h2>
                   </div>
               </div>
           </div>
           <!-- Section-title end -->
           <div class="row">
               <!-- Single-blog start -->
               @foreach ($articles as $article)
                   <div class="col-lg-6">
                       <div class="single-blog mt-30">
                           <div class="row">
                               <div class="col-xl-6 col-md-7">
                                   <div class="blog-info">
                                       <div class="post-meta fix">
                                           <div class="post-date floatleft"><span
                                                   class="text-dark-red">{{ $article->dayMonth }} </span></div>
                                           <div class="post-year floatleft">
                                               <p class="text-uppercase text-dark-red mb-0">{{ $article->month }}
                                                   ,{{ $article->year }} </p>
                                               <h4 class="post-title"><a href="#"
                                                       tabindex="0">{{ $article->title }}
                                                       {{ $article->year }}</a></h4>
                                           </div>
                                       </div>
                                       <div class="like-share fix">
                                           <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                                           <a href="#"><i
                                                   class="zmdi zmdi-comments"></i><span>{{ $article->comment->count() }}
                                               </span></a>
                                           <a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
                                       </div>


                                       <p>{{ Str::limit($article->content, 110, $end = '.......') }}</p>
                                       <a href="#" class="button-2 text-dark-red">Read more</a>
                                   </div>
                               </div>
                               <div class="col-xl-6 col-md-5">
                                   <div class="blog-photo">
                                       <a href="#"><img src=" {{ 'images/270x230/' . $article->blog->src }} "
                                               alt="" /></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               @endforeach
               <!-- Single-blog end -->

           </div>
       </div>
   </div>
   <!-- BLGO-AREA END -->
