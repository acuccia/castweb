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
