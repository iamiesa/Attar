 
 @include('header')


 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best admin">
        <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
            <a href="prod_detail/{{$item['prod_id']}}">
            <div class = "collection-img position-relative">
        <img src="{{ asset('upload/' . $product->image) }}" alt="Product Image"  class = "w-100" >
                <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
        </a>
            <div class = "text-center">
                <div class = "rating mt-3">
                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">{{ $product->name }} </p>
                    <span class = "fw-bold d-block">{{ $product->price }}</span>
                    <span class = "fw-bold d-block">{{ $product->description }}</span>

                    <a href = "cart/{{$item['prod_id']}}" name="cart" class = "btn btn-primary mt-3">Add to Cart</a>
                </div>
            </div>
        </div>

    </div>
</div>


@include('footer')
