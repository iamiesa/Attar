<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attar Home</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>

    <h2>User Information:</h2>
    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $mailData['user']->user_id }}</td>
                <td>{{ $mailData['user']->name }}</td>
                <td>{{ $mailData['user']->contact }}</td>
                <td>{{ $mailData['user']->email }}</td>
                <td>{{ $mailData['user']->admin }}</td>
                <td>{{ $mailData['user']->created_at }}</td>
            </tr>
        </tbody>
    </table>



    <h2>Order Details:</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>User ID</th>
                <th>Address</th>
                <th>Payment Mode</th>
                <th>Payment Status</th>
                <th>Delivery Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mailData['order'] as $order)
                <tr>
                    <td>{{ $order->prod_id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->pay_mode }}</td>
                    <td>{{ $order->pay_status }}</td>
                    <td>{{ $order->deliver_status }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Thank You For Purchasing.</p>
</body>
</html>
