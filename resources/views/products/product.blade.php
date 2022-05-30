@extends('web.layout')

@section('body')

<div class="d-flex justify-content-center pt-4 ">
    <img src="web/n.png" alt="" class="rounded ">
</div>

<div class="p-5 text-center rounded">
    <h2 class="p-1 b1" style="background-color: #373e46; color:#ef85b9; font-family: 'Supermercado One', cursive;"> SkinCare section </h2>
</div>

<div class="container">
    <div class="row text-center">
        @foreach($product as $products)
        @if($products['sale'] == 0)
        <div class="cl-12 col-md-6 col-lg-3 pb-3">
            <div class="rounded shadow pb-3 w-100 border" style=>
                <img src="/storage/{{$products['image']}}" class="cursor rounded mt-2" style="height:180px ;width:200px;" alt="">
                <h3 class="font">{{$products['name']}}</h3>
                <p class="font"> {{$products['price']}}KD </p>
                <div class="col p-3">
                    <a href="">
                        <button class="btn btn-lg p-2 shadow  b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                    @else
                    <div class="cl-12 col-md-6 col-lg-3 pb-3">
                        <div class="rounded shadow pb-3 w-100 border" style=>
                            <img src="/storage/{{$products['image']}}" class="cursor rounded mt-2" style="height:180px ;width:200px;" alt="">
                            <div>
                                <!-- <img src="web/sale.png" width="70px" class=""> -->
                                <span style="font-size: 1.75rem;" class="font ">{{$products['name']}}</span>
                            </div>
                            <span class="font" style="text-decoration: line-through; color:#999;"> {{$products['price']}}KD </span>
                            <span class="font" style="font-size: 20px;"> {{$products['aftersale']}}KD </span>
                            <div class="col p-3">
                                <a href="">
                                    <button class="btn btn-lg p-2 shadow  b1" type="submit">
                                        Add To Cart
                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                    </button>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <br>
            <br>
            <br>


            @endsection