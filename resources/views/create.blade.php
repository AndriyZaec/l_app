@extends('base')

@section('content')
    <h1>Create</h1>
    {!! Form::open(['route' => 'store']) !!}
        @include('_parts._form')
    {!! Form::close() !!}
@stop