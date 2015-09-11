@extends('app')


@section('content')

    <h1>Property Search</h1>

    {!! Form::open() !!}
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city') !!}

    <h2>Architecture</h2>
    <div class="row form-group">
        @foreach($architectures as $architecture)
            <label class="col-md-2 checkbox-inline">
                <input type="checkbox" name="architectures[{{ $architecture->id }}]" value="1"/>
                {{ $architecture->name  }}
            </label>
        @endforeach
    </div>

    <h2>Exterior Features</h2>
    <div class="form-group">
        @foreach($exteriorFeatures as $feature)
            <label class="col-md-2 checkbox-inline">
                <input type="checkbox" name="exteriorFeatures[{{ $feature->id }}]" value="1"/>
                {{ $feature->name  }}
            </label>

        @endforeach
    </div>

    {!! Form::submit('Search') !!}

    {!! Form::close() !!}



@stop
