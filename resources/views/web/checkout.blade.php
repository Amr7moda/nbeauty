@if($cart->items)

@extends('web.layout')

@section('body')

<div class="d-flex d-flexres">
    <div class="container m-5 contres">
        <div class="card mb-3 cardres">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('checkout.charge')}}" method="post" id="payment-form">
                            @csrf
                            <div class="p-3 Shipping">
                                <h3><label>Name</label></h3>
                                <input type="text" class="w-100 " name="name">

                                <h3><label class="pt-4">Shipping information</label></h3>
                                <input type="text" class="mb-3 w-100 ps-3 " placeholder="Country" name="country">
                                <input type="text" class="mb-3 w-100 ps-3 " placeholder="City" name="city">
                                <input type="text" class="mb-3 w-100 ps-3 " placeholder="Address" name="address">
                                <input type="number" class="mb-3 w-100 ps-3 " placeholder="Phone" name="phone">
                                <input type="hidden" name="totalprice" value="{{$totalprice}}">
                                <h3><label class="pt-4" for="card-element">Credit or debit card</label></h3>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <button class="btn btn-lg p-1 shadow b2 w-75 ms-5 mt-3">Submit Payment</button>
                            <h5 class="p-4 pb-0" id="loading" style="display:none; color:red">Payment in Process. Please Wait...</p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 m-5 contres">
        <div class="card text-black">
            <div class="card-body">
                <h3 class="card-titel">
                    Your Cart
                    <hr>
                </h3>
                <div class="card-text">
                    <h5 style="float: right;"> {{$totalprice}}KD</h5>
                    <p>
                        Subtotal
                    </p>

                    <h5 style="float: right;"> 0.00KD</h5>
                    <p>
                        Shipping cost
                    </p>
                    <hr style="color: #f3268b;">
                    <h5 style="float: right;"> {{$totalprice}}KD</h5>
                    <h4>Estimated Total</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@else

<meta http-equiv="refresh" content="0.0000000000; url = /home" />
@endif


<script>
    window.onload = function() {
        var stripe = Stripe("pk_test_51KVaEDJOy2sVS4O6yhRejMz6CY3NgW0uT5UUu8lZR8D22ctoWDNWUusOcrq0NXHhv8R3x0cLGXlLShMNnIjXPZOT0079tWFipg");
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            style: style
        });
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form

            var loading = document.getElementById('loading');
            loading.style.display = "block";
            form.submit();
        }
    }
</script>