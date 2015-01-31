@extends('layouts.default')
@section('content')
<h1>{{ $employee->name }} {{ $employee->surname }}</h1>
Email: {{ $employee->email }}<br>
Age: {{ $employee->age }}<br>
Gender: {{$employee->gender}}<br>
Experience: {{$employee->experience}} years <br>
Companies:<hr>
@foreach ($companies as $company)
{{$company->name}}<br>
@endforeach
<hr>
{{Form::open(["url"=>"/employee/$employee->id", "method"=>"delete"])}}
{{Form::submit('delete')}}
{{Form::close()}}
{{Form::open(["url"=>"/employee/$employee->id/edit", "method"=>"get"])}}
{{Form::submit('edit')}}
{{Form::close()}}
<a href="/employee/{{$employee->id}}/addcompany">Add Company to Employee</a>
<a href="/employee">All employees</a>
@stop
