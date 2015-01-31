@extends('layouts.default')
@section('content')
{{Form::open(['url'=>'company/'.$employee->id, 'method'=>'put'])}}
<div>
    {{Form::label('Name')}}
    {{Form::text('name', $employee->name)}}
    {{$errors->first('name')}}
</div>
<div>
    {{Form::label('Description')}}
    {{Form::text('description', $employee->description)}}
    {{$errors->first('surname')}}
</div>
<div>
    {{Form::label('VAT')}}
    {{Form::text('vat', $employee->vat)}}
    {{$errors->first('vat')}}
</div>
<div>
    {{Form::label('Email')}}
    {{Form::text('email', $employee->email)}}
    {{$errors->first('age')}}
</div>
<div>
    {{Form::label('Country')}}
    {{Form::text('country', $employee->country)}}
    {{$errors->first('gender')}}
</div>
<div>
    {{Form::label('State')}}
    {{Form::text('state', $employee->state)}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::label('City')}}
    {{Form::text('city', $employee->city)}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::label('Address')}}
    {{Form::text('address', $employee->address)}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::submit('Edit')}}
</div>
{{Form::close()}}
@stop
