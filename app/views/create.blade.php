@extends('layouts.default')
@section('content')
{{Form::open(['url'=>'employee'])}}
<div>
    {{Form::label('Name')}}
    {{Form::text('name', Input::old('name'))}}
    {{$errors->first('name')}}
</div>
<div>
    {{Form::label('Surname')}}
    {{Form::text('surname', Input::old('surname'))}}
    {{$errors->first('surname')}}
</div>
<div>
    {{Form::label('Email')}}
    {{Form::text('email', Input::old('email'))}}
    {{$errors->first('email')}}
</div>
<div>
    {{Form::label('Age')}}
    {{Form::text('age', Input::old('age'))}}
    {{$errors->first('age')}}
</div>
<div>
    {{Form::label('Gender')}}
    {{Form::text('gender', Input::old('gender'))}}
    {{$errors->first('gender')}}
</div>
<div>
    {{Form::label('Exp')}}
    {{Form::text('exp', Input::old('exp'))}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::submit('Create')}}
</div>
{{Form::close()}}
@stop
