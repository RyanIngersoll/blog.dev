
<!-- {{ Form::label('title', 'Title') }}
{{ Form::text('title') }} -->




<!-- <label for="title">title: </label> -->
<!-- {{ Form::label('title', 'title', array('class'=> 'col-sm-2 control-label,')) }} -->	
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', Input::old('title'), array('class'=>'form-control', 'placeholder'=>'title')) }}

   <!-- <input type="text" name="title" id="title"placeholder="title" value="{{{ Input::old('title') }}}" class= "form-control"> <br> -->
    {{$errors->first('title', '<span class="help-block">:message</span>')}}


    {{ Form::label('body', 'Body') }}
	{{ Form::textarea('body', Input::old('body'), array('class'=>'form-control', 'placeholder'=>'body')) }}

 <!-- <label for="body">body: </label>
   <textarea rows = "10" input type="textarea" name="body" id="body"placeholder="body" value="{{{ Input::old('body') }}}" class= "form-control"></textarea> -->
    {{$errors->first('body', '<span class="help-block">:message</span>')}}

   







