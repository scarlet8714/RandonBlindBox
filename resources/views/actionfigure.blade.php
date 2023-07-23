@vite(['resources/css/B-1.css', 'resources/js/B-1.js'])
@extends('layouts.app')
@section('content')
    <div class="carousel_css">
        <x-homepage-carousel :imgpaths="$imgpaths" />
    </div>
    <x-new-swiper-container>
        @foreach ($imgnew as $item)
            <x-new-swiper-item  :imgpath="$item" />            
        @endforeach
    </x-new-swiper-container>
@endsection