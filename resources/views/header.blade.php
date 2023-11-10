{{-- @extends('main') --}}

{{-- @section('header_section') --}}

@php 
use App\Http\Controllers\Product;
$cartItem = 0;
if (session()->has('user')){
    $cartItem= Product::CartItem();
}

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attar Home</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <!-- custom css -->
    <link rel = "stylesheet" href = "{{ asset('css/app.css') }}">


</head>
<body>
    
    <!-- navbar -->
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "login">
                <img src = "{{ asset('images/shopping-bag-icon.png') }}" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2">Attar</span>
            </a>



            <div class = "order-lg-2 nav-btns">
                <a href="cartlist">
                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-shopping-cart"></i>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary">{{$cartItem}}</span>
                </button>
            </a>
                    
          <button type="submit"  class = "btn position-relative">
                <form action="{{ url('search') }}" class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Search Products" name="query">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
           

                <div class="btn-group">

                    <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">              
                @if(session()->has('name'))
                {{ ucfirst(session()->get('name'))  }}
                @else Guest            
                @endif
                    </button>
                  
            
                    <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="{{ url('/')}}/login">Login</a></li>
                    <li><a class="dropdown-item" href="{{route('cartlist')}}">Cart</a></li>
                    <li><a class="dropdown-item" href="{{url('orders')}}">Orders</a></li>
                    <li><a class="dropdown-item" href="{{url('order_summary')}}">Ordered</a></li>

                    <li><a class="dropdown-item" href="{{url('add-prod')}}">Sell</a></li>

                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout">Logout</a></li>
                    </ul>
                </div>
        
                
            </div>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            
            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "{{url('/')}}">home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#collection">collection</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#special">specials</a>
                    </li>                 
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "#about">about us</a>
                    </li>
                   
                </ul>
            </div>
           
        </div>
    </nav>
    <!-- end of navbar -->

   


    {{-- @endsection --}}
