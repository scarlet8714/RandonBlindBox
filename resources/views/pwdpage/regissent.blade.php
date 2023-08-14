@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="position-relative d-flex p-5 w-75 flex-column my-5" style="background-color: #F5F5F5; border-radius: 20px;">
            <div
                style="border-radius: 50%; background-color: white; position: absolute; top: 1em; left: 1em; width: 1em; height: 1em;">
            </div>
            <div
                style="border-radius: 50%; background-color: white; position: absolute; top: 1em; right: 1em; width: 1em; height: 1em;">
            </div>
            <div
                style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; left: 1em; width: 1em; height: 1em;">
            </div>
            <div
                style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; right: 1em; width: 1em; height: 1em;">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle m-auto" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
            <br>
            <h2 class="m-auto mb-4">註冊成功!!</h2>
            <h4 class="m-auto" style="color: #A0A0A0">請至您的信箱內點選連結，以啟用您的帳號</h4>
        </div>
    </div>
@endsection