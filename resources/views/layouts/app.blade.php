<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
    , initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Random</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <!-- 導覽列 -->
    @include('layouts.nav')
    {{---------}}
    {{-- 內容 --}}
    @yield('content')
    {{-- 內容 --}}
    {{---------}}
    <!-- 追蹤我們的社群 -->
    @include('layouts.socialmedia')
    <!-- 頁尾 -->
    @include('layouts.footer')
</body>

</html>
    
