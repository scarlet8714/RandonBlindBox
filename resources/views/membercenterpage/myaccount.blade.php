@extends('layouts.app')

@section('content')
    <div class="container">
        <x-membercenter.title />
        <x-membercenter.member-center-inner>
            <x-membercenter.navbar />
        </x-membercenter.member-center-inner>
    </div>
@endsection