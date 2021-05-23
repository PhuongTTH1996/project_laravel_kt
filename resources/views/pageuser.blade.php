@extends('layouts.maser')
@section('content')
        <div class="products">
            <ul>
                @foreach ($products as $product)
                <li class="main-product">
                    <div class="img-product">
                        <img src='{{ asset('/static/img/'.$product->image) }}' class="img-prd">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">{{$product->str_ten}}</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">{{$product->type_amount}} <strong>VNG</strong></span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>

                @endforeach
            </ul>
        </div>
@endsection
