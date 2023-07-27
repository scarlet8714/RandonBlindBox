<div id="machine" style="display:none">
        <ul class="machine-view">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
        <ul class="machine-view">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
        <ul class="machine-view">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
</div>
        <p>Test</p>
        <button id = "test">轉</button>

        <script>
        test = document.getElementById("test");
        test.onclick = () => {
            fetch('/demotest/RandonBlindBox/public/product/slot/go')
            .then (function (response) {
                return response.json();
            })
            .then (function(response) {
                console.log(response);
                // alert("恭喜抽中 : " + response);
            })
        }
        </script>