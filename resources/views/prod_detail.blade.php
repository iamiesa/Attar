{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attar Home</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/app.css">


</head>
<body>
     --}}


     @include('header')
<div class = "col-md-6 col-lg-4 col-xl-3 p-2 best admin">
    {{-- @if(isset($product)) --}}

    <div class = "collection-img position-relative">
        <img src="{{ asset('upload/' . $product->image) }}" alt="Product Image"  class = "w-100" >
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
            <p class = "text-capitalize mt-3 mb-1">{{ $product->name }}</p>
            <span class = "fw-bold d-block">{{ $product->price }}</span>
            <span class = "fw-bold d-block">{{ $product->description }}</span>

            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
        </div>
        {{-- @else
<p>Product not found</p>
@endif --}}

    </div>
</div>


@include('footer')
{{-- 
</body>
</html> --}}