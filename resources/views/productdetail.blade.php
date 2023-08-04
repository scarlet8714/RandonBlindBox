<meta name="csrf-token" content="{{ csrf_token() }}">
@vite(['resources/css/D-1.css', 'resources/js/D-1.js'])
<x-fontsrc />
@extends('layouts.app')
@section('content')
    
    <x-productdetail.container>
        <x-slot:left>
            <x-productdetail.left>
                <x-slot:item>
                    <x-productdetail.swiper-item-first :imgpath="$product"/>
                    @foreach ($productphoto as $item)
                        <x-productdetail.swiper-item :imgpath="$item"/>
                    @endforeach
                </x-slot:item>
                <x-slot:item2>
                    <x-productdetail.swiper-item-first :imgpath="$product"/>
                    @foreach ($productphoto as $item)
                        <x-productdetail.swiper-item :imgpath="$item"/>
                    @endforeach
                </x-slot:item2>
            </x-productdetail.left>
        </x-slot:left>
        <x-slot:right>
            <x-productdetail.right :content="$product" :payment="$payment"/>

            {{-- </x-productdetail.right> --}}
        </x-slot:right>
        <x-slot:intro>
            <x-productdetail.intro>
                <img src="{{$product[0]->intro_photo}}" class="img-fluid">
            </x-productdetail.intro>
        </x-slot:intro>
    </x-productdetail.container>
    {{-- <x-productdetail.hot-container :imgpath="$hot" /> --}}
    <x-productdetail.hot-container>
        @foreach ($hot as $item)
            <x-productdetail.hot-item :imgpath="$item"/>
        @endforeach
    </x-productdetail.hot-container>
@endsection