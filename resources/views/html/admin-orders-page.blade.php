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

    <div class="heading">
        <h1>All Orders</h1>
       <!-- <button class="button" style="background-color:#d3d3d3;">Completed Orders</button>
        <button class="button" style="background-color:#ffe4e1;">Pending Orders</button>
        <button class="button" style="background-color:#b0c4de;">Customized Orders</button> -->
    </div>

    <div class="order-container">
        @foreach ($orders as $order)
            <div class="order-form" id="order-{{ $order->OrderID }}">
                <h3>Order ID: {{ $order->OrderID }}</h3>
                <p>Product ID: {{ $order->ProductID }}</p>
                <p>Email: {{ $order->checkout->email }}</p>
                <p>Contact No: {{ $order->checkout->contact_no }}</p>
                <p>Input Cake Weight: {{ $order->Input_Cake_Weight }}</p>
                <p>Input Cake Type: {{ $order->Input_Cake_Type }}</p>
                <p>Payment Method: {{ $order->checkout->payment_method }}</p>
                <p>Payment Option: {{ $order->checkout->payment_option }}</p>
                <p>Total Price: {{ $order->cart->total_price }}</p>
                <p>Payment Status:
                <form action="{{ route('admin.updatePaymentStatus', $order->OrderID) }}" method="post">
                    @csrf
                    @method('patch')
                     <select name="payment_status" id="payment_status">
                        <option value="Completed" {{ $order->PaymentStatus == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Pending" {{ $order->PaymentStatus == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="1st_Installment" {{ $order->PaymentStatus == '1st_Installment' ? 'selected' : '' }}>1st Installment</option>
                    </select>
                    </p>
                    <button type="submit" class="updateBtn">Update</button>
                </form>
                <br>
                <button type="submit" class="deleteBtn">Delete</button>
            </div>
        @endforeach
    </div>

    {!! $footer !!}
</body>
</html>
