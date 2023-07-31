<!DOCTYPE html>
<html>
<head>
    <title>Daily Transaction Reports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-dailytransaction-reports.css') }}">
</head>
<body>
    {!! $header !!}

    <div class="table-container">
        <h1 class="heading">Daily Transaction Reports</h1>

        <div class="date-picker-container">
            <!-- Your date picker input fields -->
        </div>

        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product ID</th>
                    <th>Payment Status</th>
                    <th>Order Date</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->OrderID }}</td>
                        <td>{{ $order->ProductID }}</td>
                        <td>{{ $order->PaymentStatus }}</td>
                        <td>{{ $order->cart->order_date }}</td>
                        <td>{{ $order->cart->total_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {!! $footer !!} 
</body>
</html>
