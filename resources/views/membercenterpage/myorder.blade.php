@extends('layouts.app')
@vite(['resources/css/H_member.css'])
@section('content')
<x-membercenter.title />
    <div class="container">
        
        <x-membercenter.member-center-inner>
            <x-membercenter.navbar />
        </x-membercenter.member-center-inner>
    </div>
@endsection