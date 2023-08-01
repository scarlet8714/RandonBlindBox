@extends('layouts.app')
@vite(['resources/css/H_member.css'])
@section('content')

    <x-membercenter.small-navbar />

    <div class="collection row justify-content-center mx-2 mb-4">
        <div class="row col-xs-6 col-sm-10 col-lg-8 px-0 pt-3">

            <table class="tableCollection">
                <x-membercenter.favoritelist-thead />
                <x-membercenter.favoritelist-tbody />
            </table>
        
        </div>
    </div>

@endsection
