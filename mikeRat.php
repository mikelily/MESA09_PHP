<script>
    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        conn.send('hello from index.html');
        console.log("Connection established!");
    };
    conn.onmessage = function(e) {
        console.log(e.data);
    };
</script>