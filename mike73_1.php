<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<script>
    // Assign handlers immediately after making the request,
    // and remember the jqxhr object for this request
    var jqxhr = $.getJSON( "test2.json", function() {
        console.log( "success" );
    })
        .done(function() {
            console.log( "second success" );
        })
        .fail(function() {
            console.log( "error" );
        })
        .always(function() {
            console.log( "complete" );
        });
    console.log(jqxhr);
    // Perform other work here ...

    // Set another completion function for the request above
    jqxhr.complete(function() {
        console.log( "second complete" );
    });
</script>