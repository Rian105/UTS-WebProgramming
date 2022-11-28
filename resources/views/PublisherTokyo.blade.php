@extends('Layout.Main')

@section('container')

    <div class="Publisher-Big-Box">
        <div class="Publisher-Box">
            <div class="Publisher-Text">
                Publisher Name : {{ $Home3->name }}
                <br/>
                Address : {{ $Home3->address }}
                <br/>
                Phone : {{ $Home3->phone }}
                <br/>
                Website : {{ $Home3->email }}
            </div>
        </div>
    
        <div class="Card-Container-Publisher">
            <div class="card-item-image-publisher">
                <img src='/Image/{{ $Home3->image }}' alt="Tokyo Ueno">
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
                <button class="card-inner-button" onclick="location.href='/Home/2'">Detail</button>
            </div>
        </div>
    </div>

@endsection