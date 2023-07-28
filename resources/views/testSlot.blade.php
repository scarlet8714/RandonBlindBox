<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Machine!</title>
    <link rel="stylesheet" href="./css/slot.css">
    <style>
        #machine {
            display: flex;
            flex-wrap: wrap;
            margin: auto;
        }

        .machine-view {
            list-style: none;
        }

    </style>
</head>
<body>
    <!-- @extends ('layouts.app') -->
    @section('content')
    <x-slot-machine />
    <x-slot-pull />
    <x-slot-machine-bottom />
    <x-slot-pull-bottom />
    @endsection
</body>
</html>