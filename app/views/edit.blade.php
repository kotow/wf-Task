@extends('layouts.default')
@section('content')
{{Form::open(['url'=>'employee/'.$employee->id, 'method'=>'PUT'])}}
<div>
    {{Form::label('Name')}}
    {{Form::text('name', $employee->name)}}
    {{$errors->first('name')}}
</div>
<div>
    {{Form::label('Surname')}}
    {{Form::text('surname', $employee->surname)}}
    {{$errors->first('surname')}}
</div>
<div>
    {{Form::label('Email')}}
    {{Form::text('email', $employee->email)}}
    {{$errors->first('email')}}
</div>
<div>
    {{Form::label('Age')}}
    {{Form::text('age', $employee->age)}}
    {{$errors->first('age')}}
</div>
<div>
    {{Form::label('Gender')}}
    {{Form::text('gender', $employee->gender)}}
    {{$errors->first('gender')}}
</div>
<div>
    {{Form::label('Exp')}}
    {{Form::text('exp', $employee->experience)}}
    {{$errors->first('exp')}}
</div>
<div>
    {{Form::submit('Edit')}}
</div>
{{Form::close()}}
@stop
