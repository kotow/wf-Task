@extends('layouts.default')
@section('content')
<h1>{{ $company->name }}</h1>
<h1>Description:{{$company->description}}</h1>
<h1>VAT:{{$company->vat}}</h1>
<h1>Email:{{$company->email}}</h1>
<h1>Country:{{$company->country}}</h1>
<h1>State:{{$company->state}}</h1>
<h1>City:{{$company->city}}</h1>
<h1>Address:{{$company->address}}</h1>
<h1>Employees:</h1>
{{Form::open(["url"=>"/company/$company->id", "method"=>"delete"])}}
{{Form::submit('delete')}}
{{Form::close()}}
{{Form::open(["url"=>"/company/$company->id/edit", "method"=>"get"])}}
{{Form::submit('edit')}}
{{Form::close()}}
<a href="/employee">All companies</a>
@stop
