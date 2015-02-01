@extends('layouts.default')
@section('content')
{{Form::open(['url'=>'employee/'.$id.'/addcompany'])}}
<select multiple="multiple" name="company[]">
    @foreach ($companies as $company)
    <option value="{{{$company->id}}}">{{{$company->name}}}{{{$company->id}}}</option>
    @endforeach
</select>
{{Form::submit('Add')}}
{{Form::close()}}
@stop
