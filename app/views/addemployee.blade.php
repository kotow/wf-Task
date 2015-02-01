@extends('layouts.default')
@section('content')
{{Form::open(['url'=>'company/'.$id.'/addemployee'])}}
<select multiple="multiple" name="company[]">
    @foreach ($companies as $company)
    <option value="{{{$company->id}}}">{{{$company->name}}}</option>
    @endforeach
</select>
{{Form::submit('Add')}}
{{Form::close()}}
@stop
