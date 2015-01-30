@extends('layouts.default')
@section('content')
<h1>{{ $employee->name }} {{ $employee->surname }}</h1>
<table>
    <tr>
        <td>{{ $employee->email }} {{ $employee->age }}</td>
        <td></td>
    </tr>
</table>
<a href="">Delete</a>
<a href="">Edit</a>
<a href="/employee">All employees</a>
@stop
