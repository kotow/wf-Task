@extends('layouts.default')
@section('content')
<div>
<h1>{{{ $company->name }}}</h1>
<div><strong>Description:</strong>{{{ $company->description }}}</div>
<div><strong>VAT:</strong>{{{ $company->vat }}}</div>
<div><strong>Email:</strong>{{{ $company->email }}}</div>
<div><strong>Country:</strong>{{{ $company->country }}}</div>
<div><strong>State:</strong>{{{ $company->state }}}</div>
<div><strong>City:</strong>{{{ $company->city }}}</div>
<div><strong>Address:</strong>{{{ $company->address }}}</div>
<div><strong>Employees:</strong><hr>
    @foreach ($employees as $employee)
    {{{$employee->name}}}<br>
    @endforeach
    <hr>
</div>
{{Form::open(["url"=>"/company/$company->id", "method"=>"delete"])}}
{{Form::submit('delete')}}
{{Form::close()}}
{{Form::open(["url"=>"/company/$company->id/edit", "method"=>"get"])}}
{{Form::submit('edit')}}
{{Form::close()}}
</div>
<a href="../company">All companies</a>
<a href="../company/{{$company->id}}/addemployee">Add Employees</a>
@stop
