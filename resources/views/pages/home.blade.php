@extends('layout')
@section('content')

{{-- Best sellers --}}
<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">BEST SELLERS</h2>
    <div class="row">
        @foreach ($allProduct as $item)
        @if ($item->name == "Iphone 13")
        
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="#"><img src="{{ $item->image }}" alt="Product"
                                style="width: 200px; height:200px" /></a>
                        <h3 class="text-danger">{{ $item->price }} VND</h3>
                        <h4>{{ $item->name }}</h4>
                        <div class="d-flex">
                            <a href="#" class="btn btn-success" data-toggle="tooltip" title="Add to cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </a>

                            <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>

                            <a href="#" class="btn btn-warning" data-toggle="tooltip" title="Add to compare">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

</div>
<!--features_items-->

<div class="category-tab">
    <!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#all" data-toggle="tab">Tất cả sản phẩm</a></li>
            @foreach ($allManu as $item)
            <li><a href="#{{ $item->name }}" data-toggle="tab">{{ $item->name }}</a></li>
            @endforeach
   
        </ul>
    </div>

    <div class="tab-content">
        {{-- All Product --}}
        <div class="tab-pane fade active in" id="all">
            @foreach ($allProduct as $item)
            <?php
            $path = 'order/store/'.$item->id;
        ?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <a href="#"><img src="{{ $item->image }}" alt="Product"
                                    style="width: 200px; height:200px" /></a>
<<<<<<< HEAD
                            <h2><a href="{{route('detail.id',['id'=>$item->id])}}">{{ $item->price }} VND</a></h2>
                            <h3>{{ $item->name }}</h3>
                            <div class="d-flex">
                                <a href="<?=$path?>" class="btn btn-success" data-toggle="tooltip" title="Add to cart">
=======
                            <h3>{{ $item->price }} VND</h3>
                            <h4>{{ $item->name }}</h4>
                            <div class="d-flex" style="margin-bottom: 5px">
                                <a href="#" class="btn btn-success" data-toggle="tooltip" title="Add to cart">
>>>>>>> origin/main
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>

                                <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>

                                <a href="#" class="btn btn-warning" data-toggle="tooltip" title="Add to compare">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @foreach ($allManu as $manu)
            <div class="tab-pane fade" id="{{ $manu->name }}">
                @foreach ($allProduct as $product)
                @if ($product->manufacturer == $manu->name)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="#"><img src="{{ $product->image }}" alt="Product"
                                        style="width: 200px; height:200px" /></a>
<<<<<<< HEAD
                                <h2><a href="{{route('detail.id',['id'=>$product->id])}}">{{ $product->price }} VND</a></h2>
                                <h3>{{ $product->name }}</h3>
=======
                                <h3>{{ $product->price }} VND</h3>
                                <h4>{{ $product->name }}</h4>
>>>>>>> origin/main
                                <div class="d-flex">
                                    <a href="#" class="btn btn-success" data-toggle="tooltip" title="Add to cart">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>

                                    <a href="#" class="btn btn-warning" data-toggle="tooltip" title="Add to compare">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            @endforeach
    </div>
</div>
<!--/category-tab-->

@endsection
