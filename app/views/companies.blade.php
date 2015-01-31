@extends('layouts.default')
@section('content')
<h1>Companies</h1>
<table>
    @foreach ($results as $user)
    <tr>
        <td><a href="company/{{$user->id}}">{{ $user->name }} {{ $user->description }}</a></td>
        <td><a href="">View</a></td>
        <td><a href="">Delete</a></td>
    </tr>
    @endforeach
</table>
<a href="company/create">Create</a>
@stop
