  <!-- TEAM-MEMBER-AREA END -->
  <div class="team-member-area pb-80">
      <div class="container">
          <!-- Section-title start -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title text-center">
                      <h2 class="title-border">Team Member</h2>
                  </div>
              </div>
          </div>
          <!-- Section-title end -->
          <div class="team-member">
              <div class="row">
                          <div class="col-lg-3 col-md-6">
                              <div class="single-member text-center bg-white mt-25">
                                  <img src="{{ asset('/thumbnail/images/120x120/' . $chiefs->src) }} " alt="" />
                                  <h3 class="text-uppercase mt-20">{{ $chiefs->firstname }} {{ $chiefs->name }}</h3>
                                  <h4 class="text-uppercase text-gray">{{ $chiefs->fonction }}</h4>
                                  <p class="text-gray">{{ $chiefs->content }}</p>
                                  <div class="team-social">
                                      <ul>
                                          <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                  @foreach ($teams as $team)
                      @if ($team->fonction != 'The Big Boss')
                          <div class="col-lg-3 col-md-6">
                              <div class="single-member text-center bg-white mt-25">
                                  <img src="{{ asset('/thumbnail/images/120x120/' . $team->src) }} " alt="" />
                                  <h3 class="text-uppercase mt-20">{{ $team->firstname }} {{ $team->name }}</h3>
                                  <h4 class="text-uppercase text-gray">{{ $team->fonction }}</h4>
                                  <p class="text-gray">{{ $team->content }}</p>
                                  <div class="team-social">
                                      <ul>
                                          <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                          <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                      </ul>
                                  </div>
                              </div>

                          </div>
                      @endif
                  @endforeach
              </div>
          </div>
      </div>
  </div>
  <!-- TEAM-MEMBER-AREA END -->
