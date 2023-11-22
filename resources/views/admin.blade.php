<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel = "stylesheet" href = "{{ asset('css/app.css') }}">

</head>
<body>

@include('header')

<div class="container mt-10">
    <div class="row">
        <div class="col-md-12">
            <h2>All Users</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $item)
                        <tr>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->contact }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->admin }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h2>All Products</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                        <tr>
                            <td>{{ $item->prod_id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->category }}</td>
                            <td><img src="upload/{{ $item->image }}" alt="{{ $item->image }}" class="img-fluid summ_img"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h2>All Orders</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product ID</th>
                            <th>User ID</th>
                            <th>Address</th>
                            <th>Payment Mode</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $item)
                        <tr>
                            <td>{{ $item->oder_id }}</td>
                            <td>{{ $item->prod_id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->pay_mode }}</td>
                            <td>{{ $item->pay_status }}</td>
                            <td>{{ $item->deliver_status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>

@include('footer')


</body>
</html>
