
<!-- Include the header -->
@include('header')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">

                    <div class="collection-img position-relative mb-4 mt-5 " >
                        <img src="{{ asset('upload/' . $product->image) }}" alt="Product Image" class="img-fluid">
                        <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                    </div>

                    <div class="rating">
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                        <span class="text-primary"><i class="fas fa-star"></i></span>
                    </div>

                    <h2 class="text-capitalize mt-3 mb-1">{{ $product->name }}</h2>
                    <p class="fw-bold">{{ $product->price }}</p>
                    <p class="fw-bold">{{ $product->description }}</p>

                    <a href="{{url('/')}}/cart/{{$product->prod_id }}" class="btn btn-primary mt-3">Add to Cart</a>
                    <a href="{{url('orders')}}" class="btn btn-primary mt-3">Buy Now</a>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include the footer -->
@include('footer') 
