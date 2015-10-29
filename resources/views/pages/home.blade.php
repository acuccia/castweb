@extends('app')

@section('content')

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Latest Properties</h3>
            </div>
            <div class="panel-body">
                <table class="table">

                    <tr class="row">
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Zip Code</th>
                    </tr>

                    @foreach($properties as $property)

                        <tr class="row">
                            <td>{{ $property->id }}</td>
                            <td>{{ $property->owner }}</td>
                            <td>{{ $property->zip }}</td>
                        </tr>

                    @endforeach

                </table>
            </div>
        </div>
    </div>

@stop
