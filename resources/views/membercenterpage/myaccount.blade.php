@extends('layouts.app')
@vite(['resources/css/H_member.css'])
@section('content')


        <x-membercenter.member-center-inner>
            <x-membercenter.navbar />

            <div class="col-xs-1 col-lg-2"></div>
            
            <!-- 左邊 -->
            <div class="col-xs-4 col-lg-4 px-3 pt-3">         
                <x-membercenter.accumulated />
                <x-membercenter.membership />
            </div>

            {{-- 右邊 --}}
            <x-membercenter.fill-info />
            
           
        </x-membercenter.member-center-inner>
    
    </div>
@endsection