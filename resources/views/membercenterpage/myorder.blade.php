@extends('layouts.app')
@vite(['resources/css/H_member.css', 'resources/css/H_navbar2.css'])
@section('content')

<x-membercenter.small-navbar />


<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
        <table class="tableOrder" style="margin-bottom: 120px;">
            
            <x-membercenter.order-thead />
            @foreach ($orderNum as $item)
                @php
                    $fee = 0;
                    switch ($item->deliver_method) {
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
                @endphp
                <x-membercenter.order-tbody :orderTable="$item" total="{{$total[$item->oid][0]->total + $fee}}"/>
            @endforeach
            

        </table>
    </div>
</div>

@endsection