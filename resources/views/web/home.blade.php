@extends('web.layout')

@section('body')

<head>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper mt-3" style="width:800px;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="web/n.png" style="width: 600px; height: 500px;" />
            </div>
            <div class="swiper-slide">
                <img src="web/3.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="web/1.jpg" style="width: 400px; height: 500px;" />
            </div>
            <div class="swiper-slide">
                <img src="web/7.jpg" style="width: 400px; height: 500px;" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="p-5 text-center rounded">
        <h2 class="p-1 b1" style="background-color: #373e46; color:#ef85b9; font-family: 'Supermercado One', cursive;"> Our New Arrivals ! </h2>
    </div>

    <div class="container">
        <div class="row">
            @foreach($skin as $skins)
            @if($skins['sale'] == 0)
            <div class="cl-12 col-md-6 col-lg-3 text-center">
                <img src="storage/{{$skins['image']}}" alt="" width="100%" height="250px">
                <div class="p-3">
                    <a href="{{route('cart.store',$skins->id)}}">
                        <button class="btn btn-lg p-2 shadow b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                </div>
                <h4 class="font pt-2">{{$skins['name']}}</h4>
                <p class="font" style="font-size: 20px;"> {{$skins['price']}}KD </p>
            </div>
            @else
            <div class="cl-12 col-md-6 col-lg-3 text-center">
                <img src="storage/{{$skins['image']}}" alt="" width="100%" height="250px">
                <div class="p-3">
                    <a href="{{route('cart.store',$skins->id)}}">
                        <button class="btn btn-lg p-2 shadow b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                </div>
                <h4 class="font pt-2">{{$skins['name']}}</h4>
                <span class="font" style="text-decoration: line-through; color:#999;"> {{$skins['price']}}KD </span>
                <span class="font" style="font-size: 20px; color:#f3268b;font-weight: bold;"> {{$skins['aftersale']}}KD </span>
            </div>
            @endif
            @endforeach

            @foreach($lash as $lashs)
            @if($lashs['sale'] == 0)
            <div class="cl-12 col-md-6 col-lg-3 pb-3 text-center">
                <img src="storage/{{$lashs['image']}}" alt="" width="100%" height="250px">
                <div class="p-3">
                    <a href="{{route('cart.store',$lashs->id)}}">
                        <button class="btn btn-lg p-2 shadow b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                </div>
                <h4 class="font pt-2">{{$lashs['name']}}</h4>
                <p class="font " style="font-size: 20px;"> {{$lashs['price']}}KD </p>
            </div>
            @else
            <div class="cl-12 col-md-6 col-lg-3 pb-3 text-center">
                <img src="storage/{{$lashs['image']}}" alt="" width="100%" height="250px">
                <div class="p-3">
                    <a href="{{route('cart.store',$lashs->id)}}">
                        <button class="btn btn-lg p-2 shadow b1" type="submit">
                            Add To Cart
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </a>
                </div>
                <h4 class="font pt-2">{{$lashs['name']}}</h4>
                <span class="font" style="text-decoration: line-through; color:#999;"> {{$lashs['price']}}KD </span>
                <span class="font" style="font-size: 20px; color:#f3268b;font-weight: bold;"> {{$lashs['aftersale']}}KD </span>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <br>
    <img src="web/2.jpg" alt="" style="height: 70vh; width:98vw;">
    <!-- <img src="web/6.jpg" alt="" class="mt-4" style="height: 70vh; width:98vw;"> -->

    <div class="p-5 text-center rounded b1res">
        <h2 class="p-1 pt-2 b1 b1res" style="background-color: #373e46; color:#ef85b9; font-family: 'Supermercado One', cursive;"> Special Offers,
            <p>Check out our exclusive offers & discounts!</p>
        </h2>

    </div>

    <div class="swiper swiper2 mySwiper2 pt-4">
        <div class="swiper-wrapper">
            @foreach($sale as $sales)
            <div class="swiper-slide swiper-slide2 cursor ">
                <img src="storage/{{$sales['image']}}" class="image" alt="" width="200px">
                <div class="text pt-5 shadow">
                    <h4 class="font pt-2 ">{{$sales['name']}}</h4>
                    <span class="font " style="text-decoration: line-through; color:#999;"> {{$sales['price']}}KD </span>
                    <span class="font " style="font-size: 20px; color:#f3268b;font-weight: bold;"> {{$sales['aftersale']}}KD </span>
                    <div class="p-3">
                        <button class="btn btn-lg p-2 shadow b1" type="submit">
                            <a class="text-decoration-none text-reset" href="{{route('cart.store',$sales->id)}}">

                                Add To Cart
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @endsection

</body>

</html>