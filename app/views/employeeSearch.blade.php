@extends('layouts.default')
@section('content')
<h1>Employees</h1>
<table>
    @foreach ($employees as $employee)
    <tr>
        <td><a href="../employee/{{{$employee->id}}}">{{{ $employee->name }}} {{{ $employee->surname }}}</a> ({{{$companies[$employee->id]}}} Companies)</td>
    </tr>
    @endforeach
</table>
<a href="../employee">Back</a>
@stop
