{{-- <!-- Access the $data variable here if needed -->
@if (isset($data) && $data->count() > 0)
{{-- Use $data as needed --}}
{{-- @endif --}}

{{-- @include('header') --}}
@include('crausal')
{{-- @yield('collection') --}}
@include('collection')
@include('special_prod')
@include('blog')
@include('about')
@include('news')
@include('popular')
@include('footer')
