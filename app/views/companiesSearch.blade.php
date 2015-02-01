@extends('layouts.default')
@section('content')
<h1>Companies</h1>
<table>
    @foreach ($employees as $company)
    <tr>
        <td><a href="../company/{{{$company->id}}}">{{{ $company->name }}}</a> ({{{$companies[$company->id]}}} Employees)</td>
    </tr>
    @endforeach
</table>
<a href="../company">Back</a>
@stop
