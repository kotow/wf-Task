@extends('layouts.default')
@section('content')
<h1>{{ $employee->name }} {{ $employee->surname }}</h1>
<table>
    <tr>
        <td>{{ $employee->email }} {{ $employee->age }}</td>
        <td></td>
    </tr>
</table>
Companies
@foreach ($companies as $company)
{{$company->name}}
@endforeach
{{Form::open(["url"=>"/employee/$employee->id", "method"=>"delete"])}}
{{Form::submit('delete')}}
{{Form::close()}}
{{Form::open(["url"=>"/employee/$employee->id/edit", "method"=>"get"])}}
{{Form::submit('edit')}}
{{Form::close()}}
<a href="/employee/{{$employee->id}}/addcompany">Add Company to Employee</a>
<a href="/employee">All employees</a>
@stop
