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

<div class="row">
    <div class="col-md-6 text-left"><h1>{{ $property->owner }}</h1></div>
    <div class="col-md-6 text-right">
        <h1>
            <a href="/properties/{{ $property->id - 1 }}" class="btn btn-primary">Prev</a>
            <a href="/properties/{{ $property->id + 1 }}" class="btn btn-primary">Next</a>
        </h1>
    </div>
</div>


<table class="table">
    <tr>
        <th>Street</th>
        <th>City</th>
        <th>Zip</th>
        <th>Available</th>
    </tr>
    <tr>
        <td>{{ $property->street }}</td>
        <td>{{ $property->city}}</td>
        <td>{{ $property->zip }}</td>
        <td>{{ $property->available }}</td>
    </tr>
</table>

<hr>

<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Architecture</div>
            <div class="panel-body">
                @foreach($property->architectures as $architecture)

                    <p>{{ $architecture->name }}</p>

                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Exterior Features</div>
            <div class="panel-body">
                @foreach($property->exteriorFeatures as $feature)

                    <p>{{ $feature->name }}</p>

                @endforeach
            </div>
        </div>
    </div>
</div>

@stop


