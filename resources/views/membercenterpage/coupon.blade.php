@extends('layouts.app')
@vite(['resources/css/H_member.css', 'resources/css/H_navbar3.css'])
@section('content')

    <x-membercenter.small-navbar />


    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="coupon-container">
                    <h5>我的現金優惠</h5>
                    <x-membercenter.coupon-first />
                    <x-membercenter.coupon-second />
                </div>
            </div>
        </div>
    </div>

@endsection