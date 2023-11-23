@include('header')

<div class="center mt-10">
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Payment Mode</th>
                <th>Delivery Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td><img class="summ_img" src="upload/{{ $item->image }}" alt="{{ $item->image }}"></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }} Rs</td> {{-- Updated column name to represent the price --}}
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->pay_mode }}</td>
                    <td>{{ $item->deliver_status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('footer')
