@vite(['resources/css/slot.css', 'resources/js/slot.js'])
<!DOCTYPE html>
<html lang="en">
<head>
  <x-slot.slot-quote />
</head>
<body style="background-color: #3C3C7B">
        <div class="draw_machine">
            <div class="row">
                <x-slot.slot-machine :product="$product" :pid="$pid"/>
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
        <x-slot.slot-dialog :product="$product" :times="$times"/>
        <x-slot.slot-dailog-show-types :product="$product"/>
        <x-slot.slot-rwd :pid="$pid" :times="$times"/>
        <!-- 頁尾(for抽獎機)-->
</body>
</html>