@extends('backend.app')

@section('main-content')



    <div class="uk-grid">
        
        @foreach($images as $image)
        
        <div class="uk-width-1-3">


            <img src="{{url('images/uploaded/' . $image->image )}}" width="100%" alt="">

            <h2 class="uk-h2">{{$image->title}}</h2>
            
            
        </div>
            
            
            
            
            @endforeach
    </div>



@stop