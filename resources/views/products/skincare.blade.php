@extends('web.layout')

@section('body')

<div class="p-5 text-center rounded">
    <h2 class="p-1 b1" style="background-color: #373e46; color:#ef85b9; font-family: 'Supermercado One', cursive;"> SkinCare section </h2>
</div>

<div class="container">
    <div class="row text-center">
        @foreach($products as $product)

        @if($product['category_id'] == 2)
        @if($product['sale'] == 0)

        <div class="cl-12 col-md-6 col-lg-3 pb-3">
            <div class="rounded shadow w-100 border pb-3">
                <img src="/storage/{{$product['image']}}" class="cursor rounded mt-2" onclick="document.getElementById('{{$product->id}}').style.display='block'" style="height:180px ;width:200px;" alt="">
                <h4 class="font pt-2">{{$product['name']}}</h4>
                <p class="font" style="font-size: 20px;"> {{$product['price']}}KD </p>
                <div class="p-3">
                    <a href="{{route('cart.store',$product->id)}}">
                        <button class="btn btn-lg p-2 shadow b1" type="submit">
                            Add To Cart
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- moadl -->
        <div id="{{$product['id']}}" class="modal">
            <div class="modal-content animate">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('{{$product->id}}').style.display='none'" class="close" title="Close Model">&times;</span>
                    <img src="/storage/{{$product['image']}}" alt="Image" class="avatar">
                </div>
                <div>
                    <h4 style="font-weight: bold;"> Description </h4>
                    <span class="close" onclick=" bar = getElementById('{{$product->name}}'); pastValue = bar.getAttribute('data-display'); bar.setAttribute('data-display', bar.style.display);  bar.style.display = pastValue ">Ar</span>
                    <h5>{{$product['name']}} </h5>
                    <p  class="px-1 descr text-truncate"> {{$product['description']}} </p>
                    <p id="{{$product['name']}}" class="px-1 descr text-truncate" style="display: none;"> {{$product['ar_description']}} </p> <br>
                </div>
            </div>
        </div>

        @else
        <div class="cl-12 col-md-6 col-lg-3 pb-3">
            <div class="rounded shadow pb-3 w-100 border">
                <img src="/storage/{{$product['image']}}" class="cursor rounded mt-2" onclick="document.getElementById('{{$product->id}}').style.display='block'" style="height:180px ;width:200px;" alt="">
                <h4 class="font pt-2">{{$product['name']}}</h4>
                <span class="font" style="text-decoration: line-through; color:#999;"> {{$product['price']}}KD </span>
                <span class="font" style="font-size: 20px; color:#f3268b;font-weight: bold;"> {{$product['aftersale']}}KD </span>
                <div class="col p-3">
                    <a href="{{route('cart.store',$product->id)}}">
                        <button class="btn btn-lg p-2 shadow  b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- moadl -->
        <div id="{{$product['id']}}" class="modal">
            <div class="modal-content animate">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('{{$product->id}}').style.display='none'" class="close" title="Close Model">&times;</span>
                    <img src="/storage/{{$product['image']}}" alt="Image" class="avatar">

                </div>
                <div>
                    <h4 style="font-weight: bold;"> Description </h4>
                    <h5>{{$product['name']}} </h5>
                    <span class="close" onclick=" bar = getElementById('{{$product->name}}'); pastValue = bar.getAttribute('data-display'); bar.setAttribute('data-display', bar.style.display);  bar.style.display = pastValue ">Ar</span>
                    <p class="px-1 descr en text-truncate"> {{$product['description']}} </p>
                    <p id="{{$product['name']}}" class="px-1 descr ar text-truncate" style="display: none;"> {{$product['ar_description']}} </p>
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