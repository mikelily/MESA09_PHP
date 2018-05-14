<script>
    // var socket;
    // var host = "ws://localhost:8000/websocketTest/server1.php";

    function connect(){
        try{

            var socket;
            var host = "ws://localhost:8000/websocketTest/server1.php";
            var socket = new WebSocket(host);

            message('<p class="event">Socket Status: '+socket.readyState);

            socket.onopen = function(){
                message('<p class="event">Socket Status: '+socket.readyState+' (open)');
            }

            socket.onmessage = function(msg){
                message('<p class="message">Received: '+msg.data);
            }

            socket.onclose = function(){
                message('<p class="event">Socket Status: '+socket.readyState+' (Closed)');
            }

        } catch(exception){
            message('<p>Error'+exception);
        }
    }

    function message(msg){
        $('#chatLog').append(msg+'</p>');
    }

</script>