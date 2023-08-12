@extends('layouts.app')
@vite(['resources/css/login.css', 'resources/js/login.js'])
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
        @case('reset')
            <x-reset-password />
            @break        
    @endswitch
    <script>
        const auth = function(){
            if($('.repwd').val() == '') {
                $('.authicon').empty();
            } else if($('.pwd').val() != $('.repwd').val()) {
                $('.authicon').empty();
                $('.authicon').append(`<svg xmlns="http://www.w3.org/2000/svg" fill="red" height="26" viewBox="0 -960 960 960"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg>`);
            } else if($('.pwd').val() == $('.repwd').val()) {
                $('.authicon').empty();
                $('.authicon').append(`<svg xmlns="http://www.w3.org/2000/svg" fill="green" height="26" viewBox="0 -960 960 960" width="48"><path d="M378-246 154-470l43-43 181 181 384-384 43 43-427 427Z"/></svg>`);
            }
        }
        
    </script>
@endsection