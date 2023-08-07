@vite(['resources/css/B-1.css', 'resources/js/B-1.js'])
<x-fontsrc />
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
    <div class="position-relative">
        <x-hot-swiper-container :imgpath="$imghot" />
    </div>
    <x-series-container>
        <x-slot:content>   
            <x-series-content :imgpath="$minions" visible=""/>    
            <x-series-content :imgpath="$conan" visible="d-none"/>    
            <x-series-content :imgpath="$chip_dale" visible="d-none"/>    
            <x-series-content :imgpath="$hacipupu" visible="d-none"/>    
            <x-series-content :imgpath="$molly" visible="d-none"/>    
        </x-slot:content>
        <x-slot:item>          
            <x-series-item :imgpath="$minions" visible=""/>        
            <x-series-item :imgpath="$conan" visible="d-none"/>        
            <x-series-item :imgpath="$chip_dale" visible="d-none"/>        
            <x-series-item :imgpath="$hacipupu" visible="d-none"/>        
            <x-series-item :imgpath="$molly" visible="d-none"/>        
        </x-slot:item>
    </x-series-container>
@endsection