@extends('app')

@section('content')

    <div class="uk-cover full-view-port">

        <div class="uk-slidenav-position uk-margin" data-uk-slideshow="{animation:'swipe'}">

            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
               data-uk-slideshow-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>

            <ul class="uk-slideshow uk-slideshow-fullscreen uk-align-center">

                @foreach($images as $image)

                <li><img src="{{url('images/uploaded/' . $image->image )}}" width="100%" alt="">


                    <div class="uk-overlay-panel uk-overlay-fade">

                        <h1 class="uk-h1">{{$image->title}}</h1>
                        <h1 class="uk-h3">{{$image->description}}</h1>

                    </div>


                </li>


                    @endforeach

            </ul>


        </div>
    </div>


@stop