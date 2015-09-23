<?php

namespace App\Http\Utilities;

class PropertyFeatures
{
    protected static $featureList = [
        'Architecture'         =>  'architecture',
        'Bathroom'             =>  'bathroom_feature',
        'Bedroom'              =>  'bedroom_feature',
        'Commercial Features'  =>  'commercial_feature',
        'Den'                  =>  'den_feature',
        'Dining Room'          =>  'dining_feature',
        'Driveway'             =>  'driveway_feature',
        'Entry'                =>  'entry_feature',
        'Exterior'             =>  'exterior_feature',
        'Garage'               =>  'garage_feature',
        'Interior'             =>  'interior_feature',
        'Kitchen'              =>  'kitchen_feature',
        'Living Room'          =>  'living_feature',
        'Pool'                 =>  'pool_feature',
        'Sunroom'              =>  'sunroom_feature',
    ];

    public static function getFeatureList()
    {
        return static::$featureList;
    }

    public static function getFeatureCodes()
    {
        return array_values(static::$featureList);
    }

    public static function getFeatureLabels()
    {
        return array_keys(static::$featureList);
    }
}