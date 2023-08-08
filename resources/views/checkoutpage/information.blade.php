@extends('layouts.app')
@vite(['resources/css/I_check.css', 'resources/js/I_check.js'])

@section('content')
    <div class="container">
        {{-- 123icon --}}
        <x-checkout.circle123 :state="['cart' => 'active', 'information' => 'active', 'confirm' => '']"/>
        <x-checkout.navbar />   
    </div>
    {{-- 購買清單 --}}
    <x-checkout.checkorder />
    {{-- 商品資料 --}}
    <div class="row justify-content-center mb-4">
        <div class="cartList col-xs-6 col-sm-10 col-lg-8 py-3">
            <x-checkout.cartlist />
            @foreach ($cartproduct as $item)
            <x-checkout.cartlist-info :cartinfo="$item" :sellspec="$sellspec"/>
            @endforeach
            <x-checkout.cupon />
            {{-- 小計 --}}
            <x-checkout.subtotal />
            <x-checkout.delivery-fee />
            <x-checkout.discount />
            <x-checkout.total-price />
        </div>
    </div>
    {{-- 收件方式 --}}
    <x-checkout.receive-method />
    <x-checkout.receive-method-inner>
            <x-checkout.delivery1 />
            <x-checkout.delivery2 />
            <x-checkout.delivery3 />
    </x-checkout.receive-method-inner>
    {{-- 付款方式 --}}
    <x-checkout.payment-method />
    <x-checkout.payment-method-inner>
            <x-checkout.payment1 />
            <x-checkout.payment2 />
    </x-checkout.payment-method-inner>
    {{-- 顧客資料 --}}
    <x-checkout.client-info />
    <x-checkout.client-info-inner>
        <x-checkout.orderer-name />
        <x-checkout.orderer-mail />
        <x-checkout.orderer-tel />
        <x-checkout.address />
    </x-checkout.client-info-inner>
    {{-- 底層按鈕 --}}
    <x-checkout.information-bottom-button> 
        <x-checkout.back-cart />
        <x-checkout.submit-order />
    </x-checkout.information-bottom-button>
    
    


   


    
@endsection