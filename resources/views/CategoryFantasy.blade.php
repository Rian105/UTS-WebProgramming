@extends('Layout.Main')

@section('container')

        <div class="card-item-container">
            <div class="card-item-image">
                <img src="Image/{{ $img }}" alt="Harry-Potter">
            </div>
        
            <div class="card-item-text-overflow">
                <div class="card-item-title">
                    {{ $Title }}
                </div>
            </div>
        
            <div class="Author-Name">
                by
                <br/>
                {{ $Author }}
            </div>
        
            <div class="card-inner-button-container">
                <button class="card-inner-button" onclick="location.href='/Home/harry-potter-prisoner'">Detail</button>
            </div>
        </div>

    
@endsection