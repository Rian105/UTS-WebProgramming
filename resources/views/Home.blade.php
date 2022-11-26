@extends('Layout.Main')

@section('container')

    @foreach ($Home as $post)
        <div class="display-later">
            <div class="card-item-container">
                <div class="card-item-image">
                    <img src="Image/{{ $post->image }}" alt="Harry-Potter">
                </div>
    
                <div class="card-item-text-overflow">
                    <div class="card-item-title">
                        {{ $post->title }}
                    </div>
                </div>
    
                <div class="card-inner-button-container">
                    <button class="card-inner-button" onclick="location.href='/Home/{{ $post->id }}'">Detail</button>
                </div>
            </div>
        </div>  
    @endforeach

@endsection