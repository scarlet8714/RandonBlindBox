@extends('layouts.app')
@vite(['resources/css/I_check.css', 'resources/js/I_check.js'])

@section('content')
    <div class="container">
        {{-- 123icon --}}
        <x-checkout.circle123 :state="['cart' => 'active', 'information' => 'active', 'confirm' => 'active']"/>
        <x-checkout.navbar />   
    </div>
    {{-- 購買清單 --}}
    <x-checkout.checkorder />
    {{-- 商品資料 --}}
    <div class="row justify-content-center mb-4">
        <div class="cartList col-xs-6 col-sm-10 col-lg-8 py-3">
            <x-checkout.cartlist />
            
            <x-checkout.cartlist-info />
            <x-checkout.cartlist-info1 />
            <x-checkout.cupon />
            <x-checkout.subtotal />
            <x-checkout.delivery-fee />
            <x-checkout.discount />
            <x-checkout.total-price />
        </div>
    </div>
    {{-- 收件方式 --}}
    <x-checkout.receive-method />
    <x-checkout.receive-method-inner>
        <x-checkout.home-delivery />
        <x-checkout.convenience-delivery />
        <x-checkout.home-delivery-info />
        <x-checkout.convenience-delivery-info />
    </x-checkout.receive-method-inner>
    {{-- 付款方式 --}}
    <x-checkout.payment-method />
    <x-checkout.payment-method-inner>
        <x-checkout.credit-card />
        <x-checkout.atm />
        <x-checkout.cash />
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