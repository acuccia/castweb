


<div class="row">

    @include('properties.detailPanel', ['category' => 'Architecture', 'featureList' => $property->architectures])
    @include('properties.detailPanel', ['category' => 'Exterior Features', 'featureList' => $property->exteriorFeatures])
    @include('properties.detailPanel', ['category' => 'Bathroom', 'featureList' => $property->bathroomFeatures])
    @include('properties.detailPanel', ['category' => 'Bedroom', 'featureList' => $property->bedroomFeatures])
    @include('properties.detailPanel', ['category' => 'Den', 'featureList' => $property->denFeatures])
    @include('properties.detailPanel', ['category' => 'Dining Room', 'featureList' => $property->diningFeatures])
    @include('properties.detailPanel', ['category' => 'Driveway', 'featureList' => $property->drivewayFeatures])
    @include('properties.detailPanel', ['category' => 'Entry', 'featureList' => $property->entryFeatures])
    @include('properties.detailPanel', ['category' => 'Garage', 'featureList' => $property->garageFeatures])

</div>
