@foreach($album as $albums)
    <p>
        {{$albums->album_name}}
    </p>
    <img src="{{$albums->album_img}}">
@endforeach