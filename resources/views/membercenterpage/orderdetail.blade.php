@extends('layouts.app')
@vite(['resources/css/H_member.css', 'resources/css/H_navbar2.css'])
@section('content')

<x-membercenter.small-navbar />
<x-membercenter.orderdetails-numbers oid="{{$oid}}"/>

<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
        <table class="orderDetails">

            <x-membercenter.orderdetails-thead />
            @foreach ($productall as $item)
                <x-membercenter.orderdetails-tbody :content="$item"/>
                <x-membercenter.orderdetails-draw-result />
                {{---------------------抽獎結果---------------------}}
                {{-- <x-membercenter.orderresult-tbody /> --}}
                {{---------------------抽獎結果---------------------}}
                {{---------------------前往抽盒---------------------}}
                <x-membercenter.orderdetails-remains :content="$item"/>
                {{---------------------前往抽盒---------------------}}

            @endforeach
            
            
        </table>
    </div>
</div>

{{-- <div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
      <table class="resultTable">
        <tbody>

            

        </tbody>
      </table>
    </div>
</div> --}}
                
{{---------------------查看收集進度---------------------}}
<x-membercenter.orderdetails-progess />
{{---------------------查看收集進度---------------------}}

<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
        <table class="total">
            <tbody>
                @php
                    $subtotal = 0;
                    foreach($productall as $item) {
                        $subtotal = $item->price * $item->quantity + $subtotal;
                    }
                    $fee = 0;
                    switch ($orderdetail[0]->deliver_method) {
                        case '超商取貨':
                            $fee = 60;
                            break;
                        case '郵寄宅配':
                            $fee = 80;
                            break;
                        case '黑貓宅急便':
                            $fee = 130;
                            break;
                    }
                    $total = $subtotal + $fee;
                @endphp
                <x-membercenter.orderdetails-table-subtotal subtotal="{{$subtotal}}"/>
                <x-membercenter.orderdetails-table-fee fee="{{$fee}}"/>
                <x-membercenter.orderdetails-table-discount />
                <x-membercenter.orderdetails-table-total total="{{$total}}"/>

            </tbody>
        </table>

    </div>
</div>




<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">

        <x-membercenter.orderdetails-card-order>
            <x-slot:ordernumber>
                {{$orderdetail[0]->oid}}
            </x-slot:ordernumber>
            <x-slot:ordertime>
                {{Str::substr($orderdetail[0]->order_date, 0, 10) }}
            </x-slot:ordertime>
            <x-slot:orderstatus>
                待出貨
            </x-slot:orderstatus>
        </x-membercenter.orderdetails-card-order>
        <x-membercenter.orderdetails-card-deliver>
            <x-slot:deliver>
                {{$orderdetail[0]->deliver_method}}
            </x-slot:deliver>
            <x-slot:name>
                {{$member[0]->name}}
            </x-slot:name>
            <x-slot:phone>
                {{$member[0]->phone}}
            </x-slot:phone>
        </x-membercenter.orderdetails-card-deliver>
        <x-membercenter.orderdetails-card-customer>
            <x-slot:name>
                {{$member[0]->name}}
            </x-slot:name>
            <x-slot:phone>
                {{$member[0]->phone}}
            </x-slot:phone>
        </x-membercenter.orderdetails-card-customer>
        <x-membercenter.orderdetails-card-pay />

    </div>
</div>





@endsection

