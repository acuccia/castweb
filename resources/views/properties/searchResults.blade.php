@extends('app')


@section('content')

    <h1>Search Results</h1>

    <table class="table">
        <tr class="row">
            <th>Property ID</th>
            <th>Owner</th>
            <th>City</th>
            <th>Architecture</th>
            <th>Exterior Features</th>
        </tr>

        @foreach($properties as $property)

            <tr class="row">
                <td>{{ $property->id }}</td>
                <td><a href="/properties/{{ $property->id }}"> {{ $property->owner }} </a></td>
                <td>{{ $property->city }}</td>
                <td>
                    @foreach($property->architectures as $architecture)
                        <span class="label label-info">{{ $architecture->name }}</span>
                    @endforeach
                </td>
                <td>
                    @foreach($property->exteriorFeatures as $feature)
                        <span class="label label-default">{{ $feature->name }}</span>
                    @endforeach
                </td>
            </tr>

        @endforeach

    </table>

@stop