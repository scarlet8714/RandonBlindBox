@extends('layouts.app')
@vite(['resources/css/H_member.css', 'resources/css/H_navbar2.css'])
@section('content')

<x-membercenter.small-navbar />


<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
        <table class="tableOrder" style="margin-bottom: 120px;">
            
            <x-membercenter.order-thead />

            <x-membercenter.order-tbody :orderTable="$orderNum" />
        </table>
    </div>
</div>

@endsection