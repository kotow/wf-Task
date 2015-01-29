@extends('layouts.default')
@section('content')
<table>
<tr>
    <td>name</td>
    <td>surname</td>
    <td>email</td>
    <td>age</td>
    <td>gender</td>
    <td>experience</td>
    <td>companies</td>
</tr>
@foreach ($results as $user)
<tr>
    <td><a href="{{$user->id}}">{{ $user->name }}</a></td>
    <td>{{ $user->surname }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->age }}</td>
    <td>{{ $user->gender }}</td>
    <td><a href="">View</a></td>
    <td><a href="">Delete</a></td>
</tr>
@endforeach
</table>
<a href="">Create</a>
@stop
