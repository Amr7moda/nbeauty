@extends('web.layout')

@section('body')

<div class="p-5 text-center rounded">
    <h2 class="p-1 b1" style="background-color: #373e46; color:#ef85b9; font-family: 'Supermercado One', cursive;"> Lashes section </h2>
</div>

<div class="container">
    <div class="row text-center">
        @foreach($product as $products)
        @if($products['category_id'] == 1)
        @if($products['sale'] == 0)
        <div class="cl-12 col-md-6 col-lg-3 pb-3">
            <div class="rounded shadow w-100 border pb-3">
                <img src="storage\{{$products['image']}}" class="cursor rounded mt-2" onclick="document.getElementById('{{$products->id}}').style.display='block'" style="height:180px ;width:200px;" alt="">
                <h4 class="font pt-2">{{$products['name']}}</h4>
                <p class="font" style="font-size: 20px;"> {{$products['price']}}KD </p>
                <div class="col p-3 ">
                    <a href="{{route('cart.store',$products->id)}}">
                        <button class="btn btn-lg p-2 shadow b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- moadl -->
        <div id="{{$products['id']}}" class="modal">
            <div class="modal-content animate">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('{{$products->id}}').style.display='none'" class="close" title="Close Model">&times;</span>
                    <img src="/storage/{{$products['image']}}" alt="Image" class="avatar">
                </div>
                <div>
                    <h4 style="font-weight: bold;"> Description </h4>
                    <h5>{{$products['name']}} </h5>
                    <p class="px-5"> {{$products['description']}} </p>
                    <br>
                </div>
            </div>
        </div>

        @else
        <div class="cl-12 col-md-6 col-lg-3 pb-3">
            <div class="rounded shadow pb-3 w-100 border" style=>
                <img src="/storage/{{$products['image']}}" class="cursor rounded mt-2" onclick="document.getElementById('{{$products->id}}').style.display='block'" style="height:180px ;width:200px;" alt="">
                <h4 class="font pt-2">{{$products['name']}}</h4>
                <span class="font" style="text-decoration: line-through; color:#999;"> {{$products['price']}}KD </span>
                <span class="font" style="font-size: 20px; color:#f3268b;font-weight: bold;"> {{$products['aftersale']}}KD </span>
                <div class="col p-3">
                    <a href="{{route('cart.store',$products->id)}}">
                        <button class="btn btn-lg p-2 shadow  b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- moadl -->
        <div id="{{$products['id']}}" class="modal">
            <div class="modal-content animate">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('{{$products->id}}').style.display='none'" class="close" title="Close Model">&times;</span>
                    <img src="/storage/{{$products['image']}}" alt="Image" class="avatar">
                </div>
                <div>
                    <h4 style="font-weight: bold;"> Description </h4>
                    <h5>{{$products['name']}} </h5>
                    <p class="px-5"> {{$products['description']}} </p>
                    <br>
                </div>
            </div>
        </div>
        @endif
        @endif
        @endforeach
    </div>
</div>
@endsection