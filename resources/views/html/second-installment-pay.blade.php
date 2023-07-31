<!DOCTYPE html>
<html>
<head>
    <title>Customer Profile Payments</title>
        <link rel="stylesheet" href="{{ asset('css/styles_second-installment-pay.css') }}">

</head>
<body>
    <h1>Customer Profile Details</h1>
    @if (count($orderIds) > 0)
        <table>
            <tr>
                <th>Order ID</th>
                <th></th>
            </tr>
            @foreach ($orderIds as $orderId)
                <tr>
                    <td>{{ $orderId }}</td>
                    <td>
                        <form action="{{ route('process.second.installment') }}" method="post">
                           @csrf
                            <input type="hidden" name="orderId" value="{{ $orderId }}">
                            <button type="submit">Pay Now</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No order IDs found.</p>
    @endif
</body>
</html>
