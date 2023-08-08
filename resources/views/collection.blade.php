@vite(['resources/css/C-3.css', 'resources/js/C-3.js', 'resources/cs/collection.css', 'resources/js/collection.js'])

@extends('layouts.app')
    <x-collect.collection-quote />
@section('content')
    <x-collect.collection-title />
    <!-- 收集款式卡片 -->
    <div class="bg-light">
        <div class="container p-5">
            <div class="row card_back1">
            @for ($i = 0; $i < count($product); $i++)
                <x-collect.collection-card :product="$product[$i]" :number="($i+1)"/>                      
            @endfor
            </div>
        </div>
    </div>
    <x-collect.collection-dialog />
@endsection