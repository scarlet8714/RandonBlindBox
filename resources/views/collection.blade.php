@vite(['resources/css/C-3.css', 'resources/js/C-3.js', 'resources/css/collection.css', 'resources/js/collection.js'])

@extends('layouts.app')
@section('content')
        <x-collect.collection-title :name="$product[2]"/>
        <x-collect.collection-card :product="$product"/>
        {{-- 放預設的內容，點擊後全替換掉 --}}
        <div id = 'showDialog'>
        </div>
@endsection