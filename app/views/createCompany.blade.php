@extends('layouts.default')
@section('content')
{{Form::open(['url'=>'company'])}}
<div>
    {{Form::label('Name')}}
    {{Form::text('name', Input::old('name'))}}
    {{$errors->first('name')}}
</div>
<div>
    {{Form::label('Description')}}
    {{Form::text('description', Input::old('description'))}}
    {{$errors->first('surname')}}
</div>
<div>
    {{Form::label('VAT')}}
    {{Form::text('vat', Input::old('vat'))}}
    {{$errors->first('vat')}}
</div>
<div>
    {{Form::label('Email')}}
    {{Form::text('email', Input::old('email'))}}
    {{$errors->first('age')}}
</div>
<div>
    {{Form::label('Country')}}
    {{Form::text('country', Input::old('country'))}}
    {{$errors->first('gender')}}
</div>
<div>
    {{Form::label('State')}}
    {{Form::text('state', Input::old('state'))}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::label('City')}}
    {{Form::text('city', Input::old('city'))}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::label('Address')}}
    {{Form::text('address', Input::old('address'))}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::submit('Create')}}
</div>
{{Form::close()}}
@stop
