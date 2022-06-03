<!-- PRODUCT-AREA START -->
<div class="product-area pt-80 pb-80 product-style-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <!-- Widget-Search start -->
                <aside class="widget widget-search mb-30">
                    <form action="/search" method="GET">
                        <input type="text" placeholder="Search here..." name="q" />
                        <button type="submit" class="fa fa-search" aria-hidden="true">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                </aside>
                <!-- Widget-search end -->
                <!-- Widget-Categories start -->
                <aside class="widget widget-categories  mb-30">
                    <div class="widget-title">
                        <h4>Categories</h4>
                    </div>
                    <div id="cat-treeview" class="widget-info product-cat boxscrol2">
                        <ul>
                            @foreach ($types as $type)
                                <li><a href="/type/{{ $type->id }}">{{ $type->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </aside>
                <!-- Widget-categories end -->
                <!-- Widget-Size start -->
                <aside class="widget widget-size mb-30">
                    <div class="widget-title">
                        <h4>Size</h4>
                    </div>
                    <div class="widget-info size-filter clearfix">
                        <ul>
                            @foreach ($sizes as $size)
                                <li><a href="#">{{ $size->name }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
                <!-- Widget-Size end -->
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Shop-Content End -->
                <div class="shop-content mt-tab-30 mb-30 mb-lg-0">
                    <div class="product-option mb-30 clearfix">
                        <!-- Nav tabs -->
                        <ul class="nav d-block shop-tab">
                            <li><a href="#grid-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-module"></i></a></li>
                            <li><a class="active" href="#list-view" data-bs-toggle="tab"><i
                                        class="zmdi zmdi-view-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane" id="grid-view">
                            <div class="row">
                                @foreach ($produits as $produit)
                                    <!-- Single-product start -->
                                    <div class="col-lg-4 col-md-6">
                                        <a href="/product/{{ $produit->id }} ">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    {{-- condition pour afficher les étiquette 'NEW' ou 'SALE' --}}
                                                    @if ($produit->state == 'SALE')
                                                        <span
                                                            class="pro-label sale-label">{{ $produit->state }}</span>
                                                    @elseif ($produit->state == 'NEW')
                                                        <span class="pro-label new-label">{{ $produit->state }}
                                                        </span>
                                                    @else
                                                    @endif

                                                    <span class="pro-price-2">{{ $produit->price }}
                                                        €</span>
                                                    <a href="/product/{{ $produit->id }} ">
                                                        @foreach ($produit->image as $item)
                                                            <img src="{{ '/thumbnail/images/270x270/' . $item->src }} "
                                                                alt="" />
                                                        @endforeach
                                                    </a>
                                                </div>
                                                <div class="product-info clearfix text-center">
                                                    <div class="fix">
                                                        <h4 class="post-title"><a
                                                                href="/product/{{ $produit->id }} ">{{ $produit->name }}</a>
                                                        </h4>
                                                    </div>
                                                    <form class="w-75 mx-auto text-white" action="/card" method="POST">
                                                        @csrf

                                                        <div class="product-action clearfix">
                                                            <input name="productId" type="number" hidden
                                                                value="{{ $produit->id }}">
                                                            <input name="qtybutton" type="number" id="french-hens"
                                                                value="1" min="1" hidden>

                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#productModal" title="Quick View"><i
                                                                    class="zmdi zmdi-zoom-in"></i></a>
                                                            <button type="submit">
                                                                <a href="" data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Add To Cart"><i
                                                                        class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Single-product end -->
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane active" id="list-view">
                            <div class="row shop-list">
                                @foreach ($products as $product)
                                    <!-- Single-product start -->
                                    <div class="col-lg-12">
                                        <a href="/product/{{ $product->id }} ">
                                            <div class="single-product clearfix">
                                                <div class="product-img">
                                                    {{-- condition pour afficher les étiquette 'NEW' ou 'SALE' --}}
                                                    @if ($product->state == 'SALE')
                                                        <span
                                                            class="pro-label sale-label">{{ $product->state }}</span>
                                                    @elseif ($product->state == 'NEW')
                                                        <span class="pro-label new-label">{{ $product->state }}
                                                        </span>
                                                    @else
                                                    @endif

                                                    {{-- Condition pour afficher la promo si il y en a une --}}
                                                    {{-- Ici product discount = 0 quand pas de promo --}}
                                                    @if ($product->discount == 0)
                                                        <span class="pro-price-2">{{ $product->price }}
                                                            €</span>
                                                    @else
                                                        <span class="pro-price-2">{{ $product->discount }}
                                                            €</span>
                                                    @endif

                                                    <a href="/product/{{ $product->id }} ">
                                                        @foreach ($product->image as $item)
                                                            <img src="{{ '/thumbnail/images/270x270/' . $item->src }} "
                                                                alt="" />
                                                        @endforeach
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="fix">
                                                        <h4 class="post-title floatleft"><a
                                                                href="#">{{ $product->name }} </a></h4>
                                                    </div>
                                                    <div class="fix mb-20">
                                                        {{-- rebelotte avec affichage de la promo s'il y en a une --}}
                                                        @if ($product->discount == 0)
                                                            <span class="pro-price">{{ $product->price }}
                                                                €</span>
                                                        @else
                                                            <span class="pro-price">{{ $product->discount }}
                                                                €</span>
                                                            <span class="old-price font-16px ml-10"><del>{{ $product->price }}
                                                                    € </del></span>
                                                        @endif
                                                    </div>
                                                    <div class="product-description">
                                                        <p>{{ $product->content }} </p>
                                                    </div>
                                                    <div class="clearfix">
                                                        <form class="w-75 mx-auto text-white" action="/card"
                                                            method="POST">
                                                            @csrf


                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="02" name="qtybutton"
                                                                    class="cart-plus-minus-box">
                                                            </div>
                                                            <input name="productId" type="number" hidden
                                                                value="{{ $product->id }}">
                                                            <div class="product-action clearfix">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#productModal{{ $product->id }}"
                                                                    title="Quick View"><i
                                                                        class="zmdi zmdi-zoom-in"></i></a>
                                                                <button type="submit">
                                                                    <a href="" data-bs-toggle="tooltip"
                                                                        data-placement="top" title="Add To Cart"><i
                                                                            class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Single-product end -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Pagination start -->
                    <div class="shop-pagination  text-center">
                        <div class="pagination">
                            {{-- <ul>
                                <li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
                                <li><a href="#">01</a></li>
                                <li><a class="active" href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                                <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
                            </ul> --}}
                            {{ $products->links() }}
                        </div>
                    </div>
                    <!-- Pagination end -->
                </div>
                <!-- Shop-Content End -->
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT-AREA END -->
@foreach ($products as $product)
    @include('partials.shop.quickviewProductShop')
@endforeach
