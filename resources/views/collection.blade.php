@vite(['resources/css/C-3.css', 'resources/js/C-3.js', 'resources/cs/collection.css', 'resources/js/collection.js'])

@extends('layouts.app')
    {{-- <x-collect.collection-quote /> --}}
@section('content')
    <x-collect.collection-title />
    <!-- 收集款式卡片 -->
    <div class="bg-light">
        <div class="container p-5">
            <div class="row card_back1">
            <input type="number" id="max" value="{{ $product[2] + 1 }}" style="display: none">
            @for ($i = 0; $i < count($product[0]); $i++)
                <x-collect.collection-card :product="$product[0][$i]"/>                      
            @endfor
            </div>
        </div>
    </div>
    @for ($i = 0; $i < count($product[0]); $i++)
        <x-collect.collection-dialog :product="$product"/>                      
    @endfor
@endsection