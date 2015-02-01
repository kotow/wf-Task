@extends('layouts.default')
@section('content')
{{Form::open(["url"=>"company/search"])}}
{{Form::text('search')}}
{{Form::submit('Search')}}
{{Form::close()}}
<h1>Companies</h1>
<table>
    @foreach ($results as $company)
    <tr>
        <td><a href="../company/{{{$company->id}}}">{{{ $company->name }}}</a></td>
    </tr>
    @endforeach
</table>
<a href="../company/create">Create</a>
@stop
