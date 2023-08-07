@extends('layouts.app')
@vite(['resources/css/I_check.css', 'resources/js/I_check.js'])

@section('content')
    <div class="container">
        <x-checkout.circle123 :state="['cart' => 'active', 'information' => 'active', 'confirm' => 'active']"/>
        <x-checkout.navbar />   
    </div>
    <x-checkout.thanks-buy />
    <x-checkout.confirm-bottom-button>
        <x-checkout.confirm-search />
        <x-checkout.confirm-draw />
    </x-checkout.confirm-bottom-button>


    
@endsection