@extends('app')

<style>
    table {
        width: 100%;
    }
    td {
        width: 25%;
    }
</style>


@section('content')

    @include('properties.overview')

<hr>

    @include('properties.details')

@stop


