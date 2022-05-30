@extends('web.layout')

@section('body')

@if($cart != null && $cart->totalprice != 0)
<div class="d-flex d-flexres">
    <div class="container m-5 contres">
        @foreach($cart->items as $item)
        <div class="card mb-3 cardres">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="storage/{{$item['image']}}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$item['name']}}</h5>
                        @if($item['aftersale'] == 0)
                        <p class="card-text">{{$item['price']}}KD</p>
                        @else
                        <p class="card-text">{{$item['aftersale']}}KD</p>
                        @endif
                        <div class="number">
                            <span class="minus">
                                <a class="text-decoration-none" href="{{route('cart.remove',$item['id'])}}">
                                    -
                                </a>
                            </span>
                            <input type="text" id="minus" value="{{$item['qty']}}" />
                            <span class="plus">
                                <a class="text-decoration-none" href="{{route('cart.add',$item['id'])}}">
                                    +
                                </a>
                            </span>
                            <a href="{{route('cart.remove',$item['id'])}}"><button class="btn btn-outline-danger ms-5">Delete</button></a>
                            <small class="text-muted text-end"> <br> in stock </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="col-md-4 m-5 contres">
        <div class="card text-black">
            <div class="card-body">
                <h3 class="card-titel">
                    Your Cart
                    <hr>
                </h3>
                <div class="card-text">
                    <h5 style="float: right;"> {{$cart->totalprice}}KD</h5>
                    <p>
                        Subtotal
                    </p>

                    <h5 style="float: right;"> 0.00KD</h5>
                    <p>
                        Shipping cost
                    </p>
                    <hr style="color: #f3268b;">
                    <h5 style="float: right;"> {{$cart->totalprice}}KD</h5>
                    <h4>Estimated Total</h4>
                    <a href="{{route('cart.checkout', $cart->totalprice)}}" class="btn btn-lg p-2 shadow b2 w-100 mt-3 b2resbonsive">Chekout</a>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class="container text-center mt-5">
    <div class="row ">
        <div class="col">
            <h2>Cart</h2>
            <h5> Your cart is currently empty. </h5>
            <a href="/home"><button class="btn btn-lg p-2 shadow b2 w-25 mt-3"> Continue Shopping </button></a>
        </div>
    </div>
</div>

@endif
@endsection