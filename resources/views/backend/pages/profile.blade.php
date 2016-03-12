@extends('backend.app')

@section('main-content')



    <div class="uk-width-1-1">
        <div class="uk-container uk-container-center ">

            <h1 class="uk-h1 form-space-element">Profile</h1>



            {!! Form::model($user,array('method'=>'Post','action' => ['AdminController@update',$user->id], 'files' => true,'class'=>'uk-form')) !!}

            <div class="uk-width-1-1 form-space-element">
                {!! Form::label('name','Name: ',['class'=>'uk-3 uk-form-row']) !!}
                {!! Form::text('name',null,['class'=>'uk-width-1-1 uk-form-row']) !!}

            </div>


            <div class="uk-width-1-1 form-space-element">
                {!! Form::label('email','Email :',['class'=>'uk-3  uk-form-row']) !!}
                {!! Form::email('email',null,['class' => 'uk-width-1-1 uk-form-row']) !!}

            </div>

            <div class="uk-width-1-1 form-space-element">
                {!! Form::label('password','New Password :',['class'=>'uk-3  uk-form-row']) !!}
                {!! Form::text('password',null,['class' => 'uk-width-1-1 uk-form-row']) !!}

            </div>


            {{--<div class="uk-width-1-1 form-space-element">--}}
            {{--{!! Form::file('image') !!}--}}


            {{--</div>--}}

            <div class="uk-width-1-1 form-space-element">
                {!! Form::label('profile_pic','Profile Picture :',['class'=>'uk-3  uk-form-row']) !!}
                {!! Form::file('profile_pic',['class' => 'uk-width-1-1 uk-form-row']) !!}

            </div>


            {{--<input id="upload-select" type="file" name="image">--}}

            <div class="uk-width-1-1 form-space-element">

                <img src="{{url('images/uploaded/DSC_1747.jpg')}}" height="10%" width="10%">

                {!! Form::submit('Upload',['class' => 'uk-3 uk-button uk-button-primary uk-width-1-1 uk-form-row ']) !!}

            </div>

        </div>


        {!! Form::close() !!}


        @if($errors->any())

            <div class="uk-alert uk-alert-danger">

                <ul>


                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>

                    @endforeach

                </ul>
            </div>

        @endif

    </div>



@stop