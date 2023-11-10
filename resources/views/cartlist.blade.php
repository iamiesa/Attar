@include('header')


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


@include('footer')