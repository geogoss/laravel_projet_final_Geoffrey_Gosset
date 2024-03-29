        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="#" {{-- {{dd($product->image[0]->src)}} --}}
                                            src="{{ asset('/thumbnail/images/370x450/' . $product->image[0]->src) }} " />
                                    </div>
                                </div><!-- .product-images -->

                                <div class="product-info">
                                    <h1>{{ $product->name }}</h1>
                                    <div class="price-box-3">
                                        <hr />
                                        <div class="s-price-box">
                                            @if ($product->discount == 0)
                                                <span class="new-price">{{ $product->price }}
                                                    €</span>
                                            @else
                                                <span class="new-price">{{ $product->discount }}
                                                    €</span>
                                                <span class="old-price font-16px ml-10"><del>{{ $product->price }}
                                                        € </del></span>
                                            @endif

                                        </div>
                                        <hr />
                                    </div>
                                    <a href="/product/{{ $product->id }}" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form class="w-75 mx-auto text-white" action="/card" method="POST">
                                            @csrf
                                            <div class="numbers-row">
                                                <input name="qtybutton" type="number" id="french-hens" value="3" min="1">
                                            </div>
                                            <input name="productId" type="number" hidden value="{{ $product->id }}">

                                            <button class="single_add_to_cart_button" type="submit">Add to
                                                cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        {{ Str::limit($product->description, 110, $end = '.......') }}</div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Google +" href="#"
                                                        class="gplus social-icon"><i
                                                            class="zmdi zmdi-google-plus"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#"
                                                        class="twitter social-icon"><i
                                                            class="zmdi zmdi-twitter"></i></a></li>
                                                <li><a target="_blank" title="Facebook" href="#"
                                                        class="facebook social-icon"><i
                                                            class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#"
                                                        class="linkedin social-icon"><i
                                                            class="zmdi zmdi-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
