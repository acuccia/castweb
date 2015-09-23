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

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>

<form action="/properties/1/photos" class="dropzone" id="photoupload">
</form>

@stop


