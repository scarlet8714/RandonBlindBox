<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <button id = 'btnTest'>
        好難測試喔
    </button>

    <form action="/product/slot/test" method="post">
        @csrf
        <input id="1" style="display: none" type="text" value="1" name="pid">
        <input id="2" style="display: none" type="text" value="1" name="mid">
        <input type="submit" value="測啦!">
    </form>
    <form action="/product/slot/test" method="get">
        @csrf
        <input id="1" style="display: none" type="text" value="2" name="pid">
        <input id="2" style="display: none" type="text" value="2" name="mid">
        <input type="submit" value="測GET">
    </form>
    

    <script>
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        let dog = document.getElementById('btnTest');
        let pid = document.getElementById('1');
        let mid = document.getElementById('2');

        dog.addEventListener('click', function() {
            fetch('/product/slot/go', {
                method: 'POST',
                body: JSON.stringify({
                    test: 123,
                    pid: 1
                }),
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrfToken
                }
            })
            .then( function(response) {
                return response.json();
            }).then( function(response) {
                console.log(response);
            }).catch( function (error) {
                console.log('error');
            } )
        });
    </script>
</body>
</html>