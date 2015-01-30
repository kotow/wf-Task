@extends('layouts.default')
@section('content')
<h1>Employees</h1>
<table>
@foreach ($results as $user)
<tr>
    <td><a href="employee/{{$user->id}}">{{ $user->name }} {{ $user->surname }}</a></td>
    <td><a href="">View</a></td>
    <td><a href="">Delete</a></td>
</tr>
@endforeach
</table>
<a href="employee/create">Create</a>
@stop
