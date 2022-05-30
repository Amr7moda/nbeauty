<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&family=Supermercado+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="/web/n.png">
    <title>Nada Beauty</title>
</head>



<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0 border ">
        <div class="container-fluid p-0" style="height: 70px;">
            <a class="navbar-brand ps-1" href="/home">
                <img src="/web/n.png" width="100px" class="rounded-circle d-inline-block ">
                <span class="h1-1">Nada Beauty store</span>
            </a>

            @if(Auth::check() )
            <span class="welc" style="color:black; "> Welcome {{ Auth::user()->name }} </span>
            <ul class=" nav nav1 justify-content-end nav-cus" style="gap: 5px;">
                <li class="nav-item"><a class="nav-link active px-1 pe-2" href="{{route('cart.show')}}">
                        <span style="color: black;position: relative;left: 17px;bottom: 8px;font-size: 15px;">{{ session()->has('cart') ? session()->get('cart')->totalqty : '0' }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1" viewBox="0 0 16 16">
                            <path style="color:#ff86ab ;" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <span style="color: black;position: relative;right: -4px;"> Cart </span>
                    </a></li> 

                @if(Auth::user()->role_id == 1 )
                <li class="nav-item"><a class="nav-link active px-1" href="/admin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                            <path style="color:#ff86ab ;" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                            <path style="color:#ff86ab ;" d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <span style="color:black;"> Admin</span></a></li>
                @endif

                <li class="nav-item"><a class="nav-link active ps-0 pe-2 log" href="{{route('orders')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ff86ab">
                                    <path d="M88.6875,2.6875v5.375h14.06738l14.4978,53.2356c0.98265,3.47399 4.14779,5.87676 7.75806,5.8894h33.55176v-5.375h-33.55176c-1.19687,-0.00127 -2.24917,-0.79262 -2.58252,-1.94214l-0.92908,-3.43286h37.06336c1.25195,0.00044 2.33829,-0.86385 2.61926,-2.08386l8.0625,-34.9375c0.18269,-0.79789 -0.00776,-1.63555 -0.51747,-2.27601c-0.50971,-0.64046 -1.28325,-1.01407 -2.10179,-1.01513h-56.10156l-3.11792,-11.45862c-0.31889,-1.1691 -1.38121,-1.97982 -2.59302,-1.97888zM111.98792,21.5h51.25671l-6.82373,29.5625h-36.38623zM34.9375,24.1875v8.0625h5.375v-8.0625zM24.31873,28.58093l-3.80029,3.80029l5.70569,5.70569l3.80029,-3.80029zM50.93127,28.58093l-5.70569,5.70569l3.80029,3.80029l5.70569,-5.70569zM37.64075,37.58826c-3.93412,-0.01304 -7.30326,2.81507 -7.97213,6.69194c-0.66887,3.87687 1.55784,7.67042 5.26889,8.9764v11.24341h-26.04565c-3.44217,0.02165 -6.21747,2.82512 -6.20435,6.26733v77.04517c0.00385,2.96693 2.40807,5.37115 5.375,5.375h34.9375v-5.375h-34.9375v-77.04517c-0.01631,-0.47502 0.3544,-0.87389 0.82935,-0.89233h57.46631c0.47293,0.01825 0.84292,0.414 0.82935,0.88708v47.48792h5.375v-47.49316c0.0055,-3.43737 -2.76705,-6.23338 -6.20435,-6.25684h-26.04565v-11.24341c3.70537,-1.30404 5.93172,-5.08859 5.27143,-8.96084c-0.66029,-3.87225 -4.01504,-6.70511 -7.94318,-6.70749zM75.25,37.625v5.375h29.5625v-5.375zM16.125,43v5.375h8.0625v-5.375zM37.625,43c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0.00099,-1.48385 1.20365,-2.68651 2.6875,-2.6875zM51.0625,43v5.375h8.0625v-5.375zM80.625,48.375v5.375h24.1875v-5.375zM86,59.125v5.375h18.8125v-5.375zM127.93445,69.88025c-1.82871,-0.07579 -3.60918,0.59776 -4.92986,1.86493c-1.32068,1.26717 -2.06723,3.01829 -2.06709,4.84857c0.00342,3.70924 3.00951,6.71533 6.71875,6.71875c3.66149,0.00708 6.65449,-2.9189 6.73031,-6.57961c0.07582,-3.66071 -2.79346,-6.70811 -6.45211,-6.85264zM151.64954,69.88025c-3.64536,0.13998 -6.51299,3.16327 -6.46025,6.81094c0.05274,3.64767 3.00657,6.58679 6.65446,6.62131c3.70924,-0.00342 6.71533,-3.00951 6.71875,-6.71875c-0.00066,-1.81518 -0.73575,-3.55286 -2.03792,-4.81746c-1.30217,-1.2646 -3.06062,-1.94851 -4.87504,-1.89604zM127.65625,75.25c0.74213,0 1.34375,0.60162 1.34375,1.34375c0,0.74213 -0.60162,1.34375 -1.34375,1.34375c-0.74213,0 -1.34375,-0.60162 -1.34375,-1.34375c0.00148,-0.74152 0.60223,-1.34227 1.34375,-1.34375zM151.88049,75.25c0.74213,0.01015 1.33552,0.61999 1.32538,1.36212c-0.01015,0.74213 -0.61999,1.33552 -1.36212,1.32538c-0.74152,-0.00148 -1.34227,-0.60223 -1.34375,-1.34375c-0.00014,-0.36284 0.14647,-0.71032 0.40648,-0.96341c0.26001,-0.25309 0.61131,-0.39027 0.97402,-0.38034zM24.1875,77.9375v5.375h26.875v-5.375zM16.125,91.375v5.375h5.375v-5.375zM26.875,91.375v5.375h32.25v-5.375zM16.125,104.8125v5.375h5.375v-5.375zM26.875,104.8125v5.375h32.25v-5.375zM16.125,118.25v5.375h5.375v-5.375zM26.875,118.25v5.375h24.1875v-5.375zM69.875,120.9375c-13.35839,0 -24.1875,10.82911 -24.1875,24.1875c0,13.35839 10.82911,24.1875 24.1875,24.1875c13.35839,0 24.1875,-10.82911 24.1875,-24.1875c-0.01457,-13.35235 -10.83515,-24.17293 -24.1875,-24.1875zM69.09289,126.32825c5.12073,-0.21307 10.10673,1.67231 13.80529,5.22027c3.69855,3.54796 5.78946,8.45132 5.78932,13.57649c-0.01256,10.38465 -8.42785,18.79994 -18.8125,18.8125c-10.24235,0.0069 -18.60815,-8.18123 -18.8211,-18.42136c-0.21295,-10.24014 7.80521,-18.76897 18.03899,-19.18789zM16.125,131.6875v5.375h5.375v-5.375zM26.875,131.6875v5.375h16.125v-5.375zM78.72485,135.16235l-14.22485,14.22485l-3.47485,-3.47485l-3.80029,3.80029l5.375,5.375c0.50386,0.50412 1.1874,0.78736 1.90015,0.78736c0.71275,0 1.39629,-0.28324 1.90015,-0.78736l16.125,-16.125z"></path>
                                </g>
                            </g>
                        </svg>
                        <span style="color:black;">Orders</span></a></li>


                <li class="nav-item"><a class="nav-link active ps-0 pe-2 log" href="/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path style="color:#ff86ab ;" fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                            <path style="color:#ff86ab ;" fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg>
                        <span style="color:black;">Logout</span></a></li>
            </ul>
            @elseif(!Auth::check())
            <ul class="nav nav1" style="gap: 5px;">
                <li class="nav-item"><a class="nav-link active px-1 pe-2" href="{{route('cart.show')}}">
                        <span style="color: black;position: relative;left: 17px;bottom: 8px;font-size: 15px;">{{ session()->has('cart') ? session()->get('cart')->totalqty : '0' }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path style="color:#ff86ab ;" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <span style="color: black;"> Cart </span></a></li>

                <li class="bi bi-person-circle nav-item"><a class="nav-link active px-1" href="/register">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path style="color:#ff86ab ;" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path style="color:#ff86ab ;" fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <span style="color:black;"> Sign up </span></a></li>

                <li class="nav-item"><a class="nav-link active ps-0 pe-2  " href="/login">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path style="color:#ff86ab ;" fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path style="color:#ff86ab ;" fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                        <span style="color:black;">Login</span></a></li>
                @endif
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fix">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-tabs me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " id="n1" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="n2" href="/skincare">Skin Care</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="n3" href="/lashes">Lashes</a>
                    </li>
                </ul>
                <div class="dropdown d-flex">
                    <input class="form-control me-2" type="text" autocomplete="off" placeholder="Search" name="search" id="search" aria-label="Search">
                    <button class="hid btn btn-outline-success btn-h" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; border-color:#ff86ab;" type="submit">Search</button>
                </div>

                <div class="modal " style="display:contents !important;">
                    <div class="search scroll end-0"></div>
                </div>

            </div>

            <div class="nav2 d-none">
                @if(Auth::check() )
                <ul class="nav justify-content-end nav-cus" style="gap: 5px;">
                    <li class="nav-item"><a class="nav-link active px-1 pe-2" href="{{route('cart.show')}}">
                            <span style="color: black;position: relative;left: 17px;bottom: 8px;font-size: 15px;">{{ session()->has('cart') ? session()->get('cart')->totalqty : '0' }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1" viewBox="0 0 16 16">
                                <path style="color:#ff86ab ;" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <span style="color: black;position: relative;right: -4px;"> Cart </span>
                        </a></li>

                    @if(Auth::user()->role_id == 1 )
                    <li class="nav-item"><a class="nav-link active px-1" href="/admin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                <path style="color:#ff86ab ;" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                <path style="color:#ff86ab ;" d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            <span style="color:black;"> Admin</span></a></li>
                    @endif

                    <li class="nav-item"><a class="nav-link active ps-0 pe-2 log" href="{{route('orders')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#ff86ab">
                                        <path d="M88.6875,2.6875v5.375h14.06738l14.4978,53.2356c0.98265,3.47399 4.14779,5.87676 7.75806,5.8894h33.55176v-5.375h-33.55176c-1.19687,-0.00127 -2.24917,-0.79262 -2.58252,-1.94214l-0.92908,-3.43286h37.06336c1.25195,0.00044 2.33829,-0.86385 2.61926,-2.08386l8.0625,-34.9375c0.18269,-0.79789 -0.00776,-1.63555 -0.51747,-2.27601c-0.50971,-0.64046 -1.28325,-1.01407 -2.10179,-1.01513h-56.10156l-3.11792,-11.45862c-0.31889,-1.1691 -1.38121,-1.97982 -2.59302,-1.97888zM111.98792,21.5h51.25671l-6.82373,29.5625h-36.38623zM34.9375,24.1875v8.0625h5.375v-8.0625zM24.31873,28.58093l-3.80029,3.80029l5.70569,5.70569l3.80029,-3.80029zM50.93127,28.58093l-5.70569,5.70569l3.80029,3.80029l5.70569,-5.70569zM37.64075,37.58826c-3.93412,-0.01304 -7.30326,2.81507 -7.97213,6.69194c-0.66887,3.87687 1.55784,7.67042 5.26889,8.9764v11.24341h-26.04565c-3.44217,0.02165 -6.21747,2.82512 -6.20435,6.26733v77.04517c0.00385,2.96693 2.40807,5.37115 5.375,5.375h34.9375v-5.375h-34.9375v-77.04517c-0.01631,-0.47502 0.3544,-0.87389 0.82935,-0.89233h57.46631c0.47293,0.01825 0.84292,0.414 0.82935,0.88708v47.48792h5.375v-47.49316c0.0055,-3.43737 -2.76705,-6.23338 -6.20435,-6.25684h-26.04565v-11.24341c3.70537,-1.30404 5.93172,-5.08859 5.27143,-8.96084c-0.66029,-3.87225 -4.01504,-6.70511 -7.94318,-6.70749zM75.25,37.625v5.375h29.5625v-5.375zM16.125,43v5.375h8.0625v-5.375zM37.625,43c1.48427,0 2.6875,1.20323 2.6875,2.6875c0,1.48427 -1.20323,2.6875 -2.6875,2.6875c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875c0.00099,-1.48385 1.20365,-2.68651 2.6875,-2.6875zM51.0625,43v5.375h8.0625v-5.375zM80.625,48.375v5.375h24.1875v-5.375zM86,59.125v5.375h18.8125v-5.375zM127.93445,69.88025c-1.82871,-0.07579 -3.60918,0.59776 -4.92986,1.86493c-1.32068,1.26717 -2.06723,3.01829 -2.06709,4.84857c0.00342,3.70924 3.00951,6.71533 6.71875,6.71875c3.66149,0.00708 6.65449,-2.9189 6.73031,-6.57961c0.07582,-3.66071 -2.79346,-6.70811 -6.45211,-6.85264zM151.64954,69.88025c-3.64536,0.13998 -6.51299,3.16327 -6.46025,6.81094c0.05274,3.64767 3.00657,6.58679 6.65446,6.62131c3.70924,-0.00342 6.71533,-3.00951 6.71875,-6.71875c-0.00066,-1.81518 -0.73575,-3.55286 -2.03792,-4.81746c-1.30217,-1.2646 -3.06062,-1.94851 -4.87504,-1.89604zM127.65625,75.25c0.74213,0 1.34375,0.60162 1.34375,1.34375c0,0.74213 -0.60162,1.34375 -1.34375,1.34375c-0.74213,0 -1.34375,-0.60162 -1.34375,-1.34375c0.00148,-0.74152 0.60223,-1.34227 1.34375,-1.34375zM151.88049,75.25c0.74213,0.01015 1.33552,0.61999 1.32538,1.36212c-0.01015,0.74213 -0.61999,1.33552 -1.36212,1.32538c-0.74152,-0.00148 -1.34227,-0.60223 -1.34375,-1.34375c-0.00014,-0.36284 0.14647,-0.71032 0.40648,-0.96341c0.26001,-0.25309 0.61131,-0.39027 0.97402,-0.38034zM24.1875,77.9375v5.375h26.875v-5.375zM16.125,91.375v5.375h5.375v-5.375zM26.875,91.375v5.375h32.25v-5.375zM16.125,104.8125v5.375h5.375v-5.375zM26.875,104.8125v5.375h32.25v-5.375zM16.125,118.25v5.375h5.375v-5.375zM26.875,118.25v5.375h24.1875v-5.375zM69.875,120.9375c-13.35839,0 -24.1875,10.82911 -24.1875,24.1875c0,13.35839 10.82911,24.1875 24.1875,24.1875c13.35839,0 24.1875,-10.82911 24.1875,-24.1875c-0.01457,-13.35235 -10.83515,-24.17293 -24.1875,-24.1875zM69.09289,126.32825c5.12073,-0.21307 10.10673,1.67231 13.80529,5.22027c3.69855,3.54796 5.78946,8.45132 5.78932,13.57649c-0.01256,10.38465 -8.42785,18.79994 -18.8125,18.8125c-10.24235,0.0069 -18.60815,-8.18123 -18.8211,-18.42136c-0.21295,-10.24014 7.80521,-18.76897 18.03899,-19.18789zM16.125,131.6875v5.375h5.375v-5.375zM26.875,131.6875v5.375h16.125v-5.375zM78.72485,135.16235l-14.22485,14.22485l-3.47485,-3.47485l-3.80029,3.80029l5.375,5.375c0.50386,0.50412 1.1874,0.78736 1.90015,0.78736c0.71275,0 1.39629,-0.28324 1.90015,-0.78736l16.125,-16.125z"></path>
                                    </g>
                                </g>
                            </svg>
                            <span style="color:black;">Orders</span></a></li>


                    <li class="nav-item"><a class="nav-link active ps-0 pe-2 log" href="/logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path style="color:#ff86ab ;" fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path style="color:#ff86ab ;" fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg>
                            <span style="color:black;">Logout</span></a></li>
                </ul>
                @elseif(!Auth::check())
                <ul class="nav" style="gap: 5px;">
                    <li class="nav-item"><a class="nav-link active px-1 pe-2" href="{{route('cart.show')}}">
                            <span style="color: black;position: relative;left: 17px;bottom: 8px;font-size: 15px;">{{ session()->has('cart') ? session()->get('cart')->totalqty : '0' }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path style="color:#ff86ab ;" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <span style="color: black;"> Cart </span></a></li>

                    <li class="bi bi-person-circle nav-item"><a class="nav-link active px-1" href="/register">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path style="color:#ff86ab ;" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path style="color:#ff86ab ;" fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span style="color:black;"> Sign up </span></a></li>

                    <li class="nav-item"><a class="nav-link active ps-0 pe-2  " href="/login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path style="color:#ff86ab ;" fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                <path style="color:#ff86ab ;" fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                            <span style="color:black;">Login</span></a></li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>






    @yield('body')

    @include('sweetalert::alert')
    @extends('web.footer')