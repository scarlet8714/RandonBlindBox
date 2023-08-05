@extends('layouts.app')
@vite(['resources/css/H_member.css'])
@section('content')

<x-membercenter.small-navbar />
<x-membercenter.orderdetails-numbers />

<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
        <table class="orderDetails">

            <x-membercenter.orderdetails-thead />
            <x-membercenter.orderdetails-tbody />
            
        </table>
    </div>
</div>

<x-membercenter.orderdetails-draw-result />

<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
      <table class="resultTable">
        <tbody>

            <x-membercenter.orderresult-tbody />
            <x-membercenter.orderresult-tbody />

        </tbody>
      </table>
    </div>
</div>

<x-membercenter.orderdetails-remains />
<x-membercenter.orderdetails-progess />

<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">
        <table class="total">
            <tbody>

                <x-membercenter.orderdetails-table-subtotal />
                <x-membercenter.orderdetails-table-fee />
                <x-membercenter.orderdetails-table-discount />
                <x-membercenter.orderdetails-table-total />

            </tbody>
        </table>

    </div>
</div>



<div class="row justify-content-center mx-2 mb-4">
    <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">

        <x-membercenter.orderdetails-card-order />
        <x-membercenter.orderdetails-card-deliver />
        <x-membercenter.orderdetails-card-customer />
        <x-membercenter.orderdetails-card-pay />

    </div>
</div>





@endsection

