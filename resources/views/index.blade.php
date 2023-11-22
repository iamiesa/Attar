@php
// $data = App\Models\Add_Prod::all();
$special = App\Models\Add_Prod::where('category', 'Special')->get();
@endphp

@include('header')
@include('crausal')
@include('collected')
@include('special_prod')
@include('about')
@include('footer')
