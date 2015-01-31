@extends('layouts.default')
@section('content')
<h1>Employees</h1>
{{Form::open(["url"=>"employee/search"])}}
{{Form::text('search')}}
{{Form::submit('Search')}}
{{Form::close()}}
<table>
@foreach ($employees as $employee)
<tr>
    <td><a href="employee/{{$employee->id}}">{{ $employee->name }} {{ $employee->surname }}</a></td>
    <td><a href="">View</a></td>
    <td><a href="">Delete</a></td>
</tr>
@endforeach
</table>
<a href="employee/create">Create</a>
@stop
