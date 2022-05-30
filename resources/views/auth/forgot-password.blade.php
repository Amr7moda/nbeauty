@extends('web.layout')

@section('body')

<div class="container ">
    <div class="row p-5  w-75 justify-content-end">
        <div class="col-8 p-4 shadow border ">

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block w-100 form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="d-flex justify-content-center justify-end mt-4">
                    <x-button class="btn btn-lg p-2 shadow b2 w-75">
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection