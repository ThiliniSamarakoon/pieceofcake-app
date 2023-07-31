<!DOCTYPE html>
<html>
<head>
    <title>Admin Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-report-page.css') }}">
</head>
<body>
    {!! $header !!}

  <form action="{{ route('admin_dailyTransactionReports') }}" method="post">
   @csrf
    <div class="button-container">
        <h1 class="heading">Reports</h1>
        <div class="date-picker-container">
            <label for="from_date">From:</label>
            <input type="date" id="from_date" name="from_date">
            <span class="date-picker-gap"></span>
            <label for="to_date">To:</label>
            <input type="date" id="to_date" name="to_date">
        </div>
        <button class="button" style="background-color:#d3d3d3;" type="submit">Daily Transaction Reports</button>
        <button class="button" style="background-color:#ffe4e1;" type="submit">Inventory Reports</button>
    </div>
</form>









   {!! $footer !!}
</body>
</html>
