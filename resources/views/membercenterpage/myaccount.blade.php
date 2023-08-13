@extends('layouts.app')
@vite(['resources/css/H_member.css'])
@section('content')

<x-membercenter.small-navbar />


        {{-- 下層  --}}
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-xs-1 col-lg-2"></div>

                <div class="col-xs-4 col-lg-4 px-3 pt-3">
                    <x-membercenter.accumulated mail="{{$member[0]->mail}}" />
                    <x-membercenter.membership  />
                </div>

                <x-membercenter.fill-info :member="$member"/>

                <div class="col-xs-1 col-lg-2"></div>
            </div>
        </div>

@endsection