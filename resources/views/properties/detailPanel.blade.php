<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">{{ $category}}</div>
        <div class="panel-body">
            @foreach($featureList as $feature)

                <p>{{ $feature->name }}</p>

            @endforeach
        </div>
    </div>
</div>
