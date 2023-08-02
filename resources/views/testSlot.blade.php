@vite(['resources/css/slot.css', 'resources/js/slot.js', 'resources/css/swiper.css'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Machine!</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- C-2 CSS -->
  <link rel="stylesheet" href="./css/C-2.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
  <!-- navbar_footer CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <!-- Google Fonts_Poppins 字體 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700;800&display=swap" rel="stylesheet">

  <!-- Google Fonts_Rubik 字體 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">

  <!-- Google Fonts_Noto Sans TC 字體 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body style="background-color: #3C3C7B">
        <div class="draw_machine">
            <div class="row">
                <x-slot.slot-machine :product="$product"/>
                <x-slot.slot-pull :times="$times"/>
            </div>
            <div class="position-relative">
                <div class="row">
                    <x-slot.slot-pull-bottom :product="$product"/>
                    <x-slot.slot-machine-bottom :product="$product"/>
                </div>
            </div>
        </div>
        <div class="draw_machine_ft text-white text-center">
            @2023 Random reserved
        </div>
        <x-slot.slot-dialog :product="$product"/>
        <x-slot.slot-dailog-show-types :product="$product"/>
        <!-- 頁尾(for抽獎機)-->

  <!-- ----------------------------------------------------------- -->
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- C-2 js -->
  <script src="js/C-2.js"></script>
  <!-- javascript -->
  <script src="./js/script.js"></script>

</body>
</html>