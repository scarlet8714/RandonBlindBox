@vite(['resources/css/C-3.css', 'resources/js/C-3.js', 'resources/css/collection.css', 'resources/js/collection.js'])

@extends('layouts.app')
@section('content')
        <x-collect.collection-title :name="$product[2]"/>
        <x-collect.collection-card :product="$product"/>
        @for ($i = 0; $i < count($product[0]); $i++)
            @if (isset($product[1][$product[0][$i]->pid]))
                <x-collect.collection-dialog :product="$product[0][$i]" :types="$product[1][$product[0][$i]->pid]"/> 
            @else
                <x-collect.collection-dialog :product="$product[0][$i]"/> 
            @endif
        @endfor
@endsection