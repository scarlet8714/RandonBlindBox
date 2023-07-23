@extends('layouts.app')
@vite(['resources/css/login.css'])
@section('content')
    @switch($mode)
        @case('login')
            <x-login />
            @break
        @case('regis')
            <x-register />
            @break
        @case('forget')
            <x-forget-password />
            @break        
    @endswitch
@endsection