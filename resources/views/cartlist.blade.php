{{-- @include('header')


@foreach ($data as $item)

<div class = "col-md-6 col-lg-4 col-xl-3 p-2 best cartlist_div">
    <div class = "collection-img position-relative">
        <img src = "upload/{{$item->image}}" class = "w-100">
        <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
    </div>
     
        <div class = "text-center">
            <p class = "text-capitalize mt-3 mb-1">{{ $item->name }}</p>
            
        </div>
        <div class = "text-center">

        <span class = "fw-bold d-block">  {{ $item->price }}</span>

        </div>
        <div class = "text-center">

            <span class = "fw-bold d-block">  {{ $item->description }}</span>
    
            </div>
        <div class = "text-center">

            <a href = "removecart/{{$item->cart_id}}" class = "btn btn-warning mt-3"> Remove </a>
        </div>
    
</div>
@endforeach


@include('footer') --}}





@include('header')

<div class="container mt-10">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
        @foreach ($data as $item)
            <div class="col">
                <div class="card cartlist_div">
                    <div class="collection-img position-relative">
                        <img src="upload/{{$item->image}}" class="card-img-top img-fluid" alt="Product Image">
                        <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                    </div>

                    <div class="card-body text-center">
                        <p class="text-capitalize">{{ $item->name }}</p>
                        <span class="fw-bold d-block">{{ $item->price }}</span>
                        <span class="fw-bold d-block">{{ $item->description }}</span>
                        <a href="removecart/{{$item->cart_id}}" class="btn btn-warning mt-3">Remove</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('footer')



