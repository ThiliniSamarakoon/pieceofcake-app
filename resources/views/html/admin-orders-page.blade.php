<!DOCTYPE html>
<html>
<head>
    <title>Admin Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-orders-page.css') }}">
</head>
<body>
    {!! $header !!}

    <div class="button-container">
        <button class="button" style="background-color:#f5f5dc;">All Orders</button>
        <button class="button" style="background-color:#d3d3d3;">Completed Orders</button>
        <button class="button" style="background-color:#ffe4e1;">Pending Orders</button>
        <button class="button" style="background-color:#d2b48c;">Delivered Orders</button>
        <button class="button" style="background-color:#b0c4de;">Customized Orders</button>
    </div>

    {!! $footer !!}
</body>
</html>
