@extends('layouts.app')
@vite(['resources/css/H_member.css'])
@section('content')
    <div class="container">
        <x-membercenter.title />
        <x-membercenter.member-center-inner>
            <x-membercenter.navbar />
            
        </x-membercenter.member-center-inner>
    </div>
@endsection