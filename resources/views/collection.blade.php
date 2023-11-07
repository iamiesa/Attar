{{-- @extends('index')
@section('collection') --}}

@include('header')
    <!-- collection -->
    <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">New Collection</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">All</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".best">Best Sellers</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">Featured</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">New Arrival</button>
                </div>
                
                    

                <div class = "collection-list mt-4 row gx-0 gy-3">
              
                    @foreach($prod as $item)

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

                                <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                 @endforeach
                    
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "images/c_undershirt.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <div class = "text-center">
                                <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                                <span class = "fw-bold d-block">$ 45.50</span>
                                <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "images/c_western-shirt.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <div class = "text-center">
                                <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                                <span class = "fw-bold d-block">$ 45.50</span>
                                <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->


    {{-- @endsection --}}