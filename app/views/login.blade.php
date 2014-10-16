@extends('layouts.master')

@section('email')
@stop

@section('top-script')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
@stop


@section('bottom-script')
@stop



@section('content')

<h1>LOGIN</h1>

<div class="col-xs-6 col-md-4">
            {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal')) }}
<!-- {{$errors->has('email') ? 'has-error' : '' }} ternary-->
               <label for="email">email: </label>
               <input type="text" name="email" id="email" placeholder="email" value="{{{ Input::old('email') }}}" class= "form-control"> <br>
                {{$errors->first('email', '<span class="help-block">:message</span>')}}

               <label for="password">password: </label>
               <input type="text" name="password" id="password" placeholder="password"  class= "form-control"></textarea>
                {{$errors->first('password', '<span class="help-block">:message</span>')}}

                <h2><input type="submit" value="LOGIN"></h2>
                <!-- <textarea rows="3"></textarea> -->
            {{ Form::close() }} 
        </div>

{{--Form::submit('Update Post', array('class' => 'btn btn-primary'))--}}
{{-- @include('posts.form') --}}
