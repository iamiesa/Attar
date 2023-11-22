{{-- @include('header')

<div class="center">
    <h3> Please Add Products into  your carts before buy it..</h3>
    <table class="table">
       @foreach($data as $item)
        <tbody>
            <tr>
                <td scope="row"> <img  class="summ_img" src="upload/{{ $item->image }}" alt="{{ $item->image }}"></td>
                <td> {{ $item->name }} <br>
                {{ $item->price }}Rs <br>
              {{ $item->created_at }}   <br>
                </td>
            </tr>    
        </tbody>
        @endforeach
    </table>
</div>


<div class="center">
<table class="table">
   
    <tbody>
        <tr>
            <td scope="row"> Price</td>
            <td>{{ $total }}Rs </td>
        </tr>
        <tr>
            <td scope="row">Tax</td>
            <td>0%</td>
        </tr>
        <tr>
            <td scope="row">Discount</td>
            <td>10%</td>
        </tr>
                <td scope="row">Delivery Charges</td>
                <td>100 Rs</td>
        </tr>
         <tr>
            <td scope="row">Total Price</td>
            <td> @php 
                $amnt = $total + 100;
                $discount =abs( $amnt/10 - $amnt) ;
                @endphp {{ $discount }} Rs </td>
        </tr>
    </tbody>
</table>
</div>


<div class="oderform">
<form action="orders"  method="post">
    @csrf

<div class="form-check">
    Payment Method:
    <p>
    <input type="radio" class="form-check-input" name="payment" value="UPI" >
    UPI
</p>
<p>
    <input type="radio" class="form-check-input" name="payment" value="Cash on deliver" >
    Cash On Delivery
</p>
<p>
    <input type="radio" class="form-check-input" name="payment" value="Card" >
    Card
</p> 
</div>

<textarea name="address" placeholder="address" cols="40" rows="2"></textarea> <br>
<input type="submit" class="btn btn-success subit" name="Pay" value="Pay">
</form>
</div>

@include('footer') --}}




@include('header')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="center">
                <table class="table">
                    @foreach($data as $item)
                        <tbody>
                            <tr>
                                <td scope="row"><img class="summ_img img-fluid" src="upload/{{ $item->image }}" alt="{{ $item->image }}"></td>
                                <td>
                                    {{ $item->name }} <br>
                                    {{ $item->price }}Rs <br>
                                    {{ $item->created_at }} <br>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>

            <div class="center mt-4">
                <table class="table">
                    <tbody>
                        <tr>
                            <td scope="row">Price</td>
                            <td>{{ $total }}Rs</td>
                        </tr>
                        <tr>
                            <td scope="row">Tax</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <td scope="row">Discount</td>
                            <td>10%</td>
                        </tr>
                        <td scope="row">Delivery Charges</td>
                        <td>100 Rs</td>
                        </tr>
                        <tr>
                            <td scope="row">Total Price</td>
                            <td>
                                @php 
                                    $amnt = $total + 100;
                                    $discount = abs($amnt / 10 - $amnt);
                                @endphp 
                                {{ $discount }} Rs
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="orderform mt-4">
                <form action="orders" method="post">
                    @csrf

                    <div class="form-check">
                        <p>Payment Method:</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="payment" value="UPI">
                            <label class="form-check-label">UPI</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="payment" value="Cash on deliver">
                            <label class="form-check-label">Cash On Delivery</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="payment" value="Card">
                            <label class="form-check-label">Card</label>
                        </div>
                    </div>

                    <textarea name="address" class="form-control mt-3" placeholder="Address" rows="2"></textarea>
                    <br>
                    <input type="submit" class="btn btn-success submit" name="Pay" value="Pay">
                </form>
            </div>
        </div>
    </div>
</div>

@include('footer')
