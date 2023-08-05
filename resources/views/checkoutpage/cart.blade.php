@extends('layouts.app')
@vite(['resources/css/I_check.css', 'resources/js/I_check.js'])
{{-- <script src="https://cdn.jsdelivr.net/npm/tw-city-selector@2.1.0/dist/tw-city-selector.min.js"></script> --}}
@section('content')
    <div class="container">
        <x-checkout.circle123 :state="['cart' => 'active', 'information' => 'active', 'confirm' => 'active']"/>
        <x-checkout.navbar />   
    </div>
    <x-checkout.checkorder />
    <div class="row justify-content-center mb-4">
        <div class="cartList col-xs-6 col-sm-10 col-lg-8 py-3">
            <x-checkout.cartlist />
            {{-- @for ($i = 0; $i < 5; $i++)
                <x-checkout.cartlist-info index = "{{$i}}"/>
                
            @endfor --}}
            <x-checkout.cartlist-info />
            <x-checkout.subtotal />
        </div>
    </div>
    <x-checkout.cart-bottom-button>
        <x-checkout.go-shopping />
        <x-checkout.go-checkout />
    </x-checkout.cart-bottom-button>

    
    
@endsection