@include('header')



<div class="center">
    <table class="table">
       @foreach($data as $item)
        <tbody>
            <tr>
                <td scope="row"> <img  class="summ_img" src="upload/{{ $item->image }}" alt="{{ $item->image }}"></td>
                <td> {{ $item->name }} <br>
                {{ $item->price }}Rs <br>
              {{ $item->created_at }}   <br>
                </td>
            </tr>    
        </tbody>
        @endforeach
    </table>
    </div>

@include('footer')