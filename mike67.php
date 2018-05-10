<script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById('here').innerHTML =
                xhttp.responseText;
        }
    }

    function test1() {
        var max = document.getElementById('max').value;
        xhttp.open('GET', 'mike68.php?max=' + max, true);
        xhttp.send;

    }


</script>
<input type="button" onclick="test1()" value="test1"/>
<div id="here"></div>
0: <span id="here0"></span><br>
1: <span id="here1"></span><br>
2: <span id="here2"></span><br>
3: <span id="here3"></span><br>
4: <span id="here4"></span><br>