<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
    {{-- Paste your script code from pusher.com  --}}
        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('test');
        // Bind a function to a Event (the full Laravel class)
        channel.bind('test');
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>
</body>
