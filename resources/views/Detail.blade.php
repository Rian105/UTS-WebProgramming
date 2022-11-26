@extends('Layout.Main')

@section('container')
    
    <div class="Detail-Box">
        <div class="Show-Image-Box">
            <img src= '/Image/{{ $Home2->image }}' alt="">
        </div>

        <div class="Detail-Text">
            <a><b>Title     :</b> {{ $Home2->title }}</a>
            <br/>
            <a><b>Author    :</b> {{ $Home2->author }}</a>
            <br/>
            <a><b>Publisher :</b> {{ $Home2->publisher }}</a>
            <br/>
            <a><b>Year      :</b> {{ $Home2->year }}</a>
            <br/>
            <a><b>Synopsis  :</b></a>
            <p>{{ $Home2->synopsis }}</p>
        </div>
    </div>

@endsection