@extends('web.layout')

@section('body')

@if($orders->count() > 0)

@foreach($orders as $index => $order)
<div class="container">
    <div class="row">
        <div class="col-md-9 mt-4">
            <div class="card mt-4">
                <h1 class="p-4">Payment Details
                    @if( $ord[$index]['status'] == 1)
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fil="currentColor" style="width: 50px;">
                        <path style="fill: #2266ff;" d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                    </svg>
                    @else
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet" style="width: 50px;">
                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#09b509" stroke="none">
                            <path class="node" id="node1" d="M665 2639 c-170 -16 -315 -88 -447 -220 -64 -65 -81 -90 -139 -203-126 -246 -76 -592 115 -804 l35 -39 3 -481 3 -480 23 -25 c35 -38 85 -48 206
-45 l110 3 17 56 c45 153 177 269 327 288 214 27 392 -86 451 -287 l17 -57
131 0 c118 0 135 2 160 21 55 41 53 12 50 802 l-2 734 -33 29 c-30 27 -38 29
-117 29 l-84 0 -6 48 c-16 129 -93 291 -188 398 -104 117 -285 213 -428 229
-106 11 -125 12 -204 4z m243 -182 c152 -44 267 -135 349 -278 73 -127 90
-319 39 -458 -88 -242 -296 -391 -546 -391 -275 0 -508 190 -565 460 -19 90
-19 132 1 226 25 121 66 197 158 290 89 89 133 116 246 150 103 31 212 31 318
1z"></path>
                            <path class="node" id="node2" d="M716 2343 c-4 -9 -12 -90 -17 -181 -9 -138 -14 -167 -30 -183 -24
-24 -33 -60 -25 -103 8 -41 31 -63 84 -79 27 -8 75 -41 136 -94 53 -47 104
-83 115 -83 24 0 61 33 61 54 0 16 -25 49 -108 143 -35 40 -68 88 -73 107 -5
18 -20 44 -33 57 -22 23 -24 32 -28 186 -3 112 -9 167 -17 177 -18 21 -57 20
-65 -1z"></path>
                            <path class="node" id="node3" d="M1883 1696 l-38 -34 0 -615 c0 -681 -3 -652 66 -688 43 -22 49 -17
68 51 18 65 53 119 109 172 96 90 209 125 345 106 79 -11 170 -59 229 -120 39
-41 98 -152 98 -185 0 -31 21 -43 77 -43 65 0 112 18 142 56 22 27 22 30 19
373 l-3 346 -31 65 c-35 72 -308 442 -373 505 l-42 40 -314 3 -314 3 -38 -35z
m609 -207 c20 -9 132 -157 266 -352 71 -104 89 -98 -260 -95 l-303 3 -3 215
c-1 118 0 220 2 227 7 16 264 18 298 2z"></path>
                            <path class="node" id="node4" d="M918 550 c-44 -11 -104 -47 -135 -81 -44 -49 -65 -105 -65 -178 -1
-118 61 -211 169 -251 67 -25 119 -25 183 -1 72 27 111 60 144 122 38 68 41
169 9 239 -51 111 -189 179 -305 150z"></path>
                            <path class="node" id="node5" d="M2310 551 c-206 -43 -280 -302 -130 -452 99 -99 246 -104 357 -13
179 146 89 442 -142 467 -27 3 -66 2 -85 -2z"></path>
                        </g>
                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">

                            <path class="node" id="node7" d="M590 2456 c-113 -34 -157 -61 -246 -150 -92 -93 -133 -169 -158 -290
-20 -94 -20 -136 -1 -226 23 -110 78 -212 155 -290 113 -112 252 -170 410
-170 250 0 458 149 546 391 51 139 34 331 -39 458 -139 241 -411 354 -667 277z
m191 -112 c8 -10 14 -65 17 -177 4 -154 6 -163 28 -186 13 -13 28 -39 33 -57
5 -19 38 -67 73 -107 83 -94 108 -127 108 -143 0 -21 -37 -54 -61 -54 -11 0
-62 36 -115 83 -61 53 -109 86 -136 94 -53 16 -76 38 -84 79 -8 43 1 79 25
103 16 16 21 45 30 183 5 91 13 172 17 181 8 21 47 22 65 1z"></path>
                            <path class="node" id="node8" d="M2194 1487 c-2 -7 -3 -109 -2 -227 l3 -215 303 -3 c349 -3 331 -9
260 95 -134 195 -246 343 -266 352 -34 16 -291 14 -298 -2z"></path>
                        </g>
                    </svg>
                    @endif
                </h1>
                <div class="card-body p-3 pb-0 border">
                    <ul>
                        <h4 class="d-flex">Order ID: <p class="fw-light ms-3"> {{ $order[0]['id']}} </p>
                        </h4>
                        <h4 class="d-flex">Name: <p class="fw-light ms-3">{{ $order[0]['name']}}</p>
                        </h4>
                        <h4 class="d-flex">Address: <p class="fw-light ms-3">{{ $order[0]['address']}} </p>
                        </h4>
                        <h4 class="d-flex">Country: <p class="fw-light ms-3">{{ $order[0]['country']}} </p>
                        </h4>
                        <h4 class="d-flex">City: <p class="fw-light ms-3">{{ $order[0]['city']}} </p>
                        </h4>
                        <h4 class="d-flex">Phone: <p class="fw-light ms-3">{{ $order[0]['phone']}} </p>
                        </h4>
                        <h4 class="d-flex">Date: <p class="fw-light ms-3">{{ $order[0]['time']}} </p>
                        </h4>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-9 mt-4">
            <div class="card mt-4">
                <h1 class="p-4">Order Details</h1>
                <div class="card-body p-4  border ">
                    @foreach($order[1]->items as $item)
                    <div class="p-3">
                        <img src="storage/{{$item['image']}}" class="image mb-3" alt="" width="200px">
                        <h4> {{$item['name']}} </h4>
                        <h4>Quantity: {{$item['qty']}} </h4>
                        @if($item['aftersale'] == 0)
                        <h4> {{$item['price']}} KD</h4>
                        @else
                        <h4> {{$item['aftersale']}} KD</h4>
                        @endif

                    </div>
                    @endforeach

                    @if( ( $ord[$index]['status'] ) == 0)
                    <h4 class="ms-3" style="color: #09b509;"> Active </h4>
                    @else( $ord[$index]['status'] == 1)
                    <h4 class="ms-3" style="color: #2266ff;"> Deliverd </h4>
                    @endif
                    <hr>
                    <h3>Totalprice: {{$order[1]->totalprice}} KD</h3>
                    <h3>TotlaQty: {{$order[1]->totalqty}} </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="mx-5 mt-5">

@endforeach

@else
<div class="container text-center mt-5">
    <div class="row ">
        <div class="col">
            <h2>My Orders</h2>
            <h5> No Orders no beauty :( </h5>
            <a href="/home"><button class="btn btn-lg p-2 shadow b2 w-25 mt-3"> Continue Shopping </button></a>
        </div>
    </div>
</div>

@endif
@endsection