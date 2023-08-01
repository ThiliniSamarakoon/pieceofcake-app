<!DOCTYPE html>
<html>
<head>
    <title>Daily Transaction Reports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-dailytransaction-reports.css') }}">
  <style>
    @media print {
        #header-container {
            display: none;
        }
        #generate-reports-btn {
            display: none;
        }
        .footer-right{
            display: none;
        }
        
    }
</style>

</head>
<body>
    <div id="header-container">
        {!! $header !!}
    </div>

    <div class="date-picker-container">
        <p><b>From:</b> {{ $fromDate }}</p>
        <p style="margin-left: 500px;"><b>To:</b> {{ $toDate }}</p>
      </div>

    <div class="table-container">
        <h1 class="heading">Daily Transaction Report</h1>
                
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
            <tfoot>
        <tr>
            <td colspan="4" class="grand-total-label"><b>Grand Total:</b></td>
            <td><b>Rs.{{ $grandTotal }}.00</b></td>
        </tr>
    </tfoot>
        </table>
    </div>

    <button type="button" id="generate-reports-btn">Generate Reports</button>

    {!! $footer !!}

<script>
    document.getElementById('generate-reports-btn').addEventListener('click', function() {
        // Hide the button before printing to prevent it from being printed
        document.getElementById('generate-reports-btn').style.display = 'none';
        
        // Trigger the print dialog
        window.print();

        // After printing, show the button again
        document.getElementById('generate-reports-btn').style.display = 'block';
    });
</script>


</body>
</html>
