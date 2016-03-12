@extends('backend.app')

@section('main-content')

    <div class="uk-width-1-1">
        <div class="uk-container uk-container-center ">

            <h1 class="uk-h1 form-space-element">Upload Picture</h1>


            {!! Form::open(array('url' => '/', 'files' => true,'class'=>'uk-form')) !!}

            <div class="uk-width-1-1 form-space-element">
                {!! Form::label('title','Title: ',['class'=>'uk-3 uk-form-row']) !!}
                {!! Form::text('title',null,['class'=>'uk-width-1-1 uk-form-row']) !!}

            </div>


            <div class="uk-width-1-1 form-space-element">
                {!! Form::label('description','Description :',['class'=>'uk-3  uk-form-row']) !!}
                {!! Form::text('description',null,['class' => 'uk-width-1-1 uk-form-row']) !!}

            </div>

            {{--<div class="uk-width-1-1 form-space-element">--}}
            {{--{!! Form::file('image') !!}--}}


            {{--</div>--}}

            <div id="upload-drop" class="uk-placeholder uk-text-center uk-width-1-1">
                <i class="uk-icon-cloud-upload uk-icon-medium uk-text-muted uk-margin-small-right"></i> Attach binaries by dropping them here or <a class="uk-form-file">selecting one


                    {!! Form::file('image',null,['class' => 'uk-width-1-1 uk-form-row']) !!}

                    {{--<input id="upload-select" type="file" name="image">--}}


            <div id="progressbar" class="uk-progress uk-hidden">
                <div class="uk-progress-bar" style="width: 0%;">0%</div>
            </div>

            <div class="uk-width-1-1 form-space-element">
                {!! Form::submit('Upload',['class' => 'uk-3 uk-button uk-button-primary uk-width-1-1 uk-form-row ']) !!}

            </div>

            {!! Form::close() !!}


            @if($errors->any())

                <div class="uk-alert uk-alert-danger">

                    <ul >


                        @foreach($errors->all() as $error)

                            <li>{{$error}}</li>

                        @endforeach

                    </ul>
                </div>

            @endif

        </div>
    </div>
    @endsection