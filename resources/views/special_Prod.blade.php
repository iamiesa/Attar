{{-- @extends('main') --}}

{{-- @section('spetial_products') --}}

@include('header')
 <!-- special products -->
 <section id = "special" class = "py-5">
    <div class = "container">
        <div class = "title text-center py-5">
            <h2 class = "position-relative d-inline-block">Special Selection</h2>
        </div>

        
        <div class = "collection-list mt-4 row gx-0 gy-3">
            
            @foreach($special as $item)

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                    <a href="prod_detail/{{$item['prod_id']}}">
                    <div class = "collection-img position-relative">
                        <img src = "upload/{{ $item['image'] }}" class = "w-100">
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
                            <p class = "text-capitalize mt-3 mb-1">{{ $item['name'] }} </p>
                            <span class = "fw-bold d-block">{{ $item['price'] }}</span>
                            <span class = "fw-bold d-block">{{ $item['description'] }}</span>

                            <a href = "cart/{{$item['prod_id']}}" name="cart" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                </div>
             @endforeach
    
            </div>
 
    </div>
</section>
<!-- end of special products -->


{{-- @endsection --}}