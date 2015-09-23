<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\Utilities\PropertyFeatures;

class CreateFeaturesTables extends Migration
{
    /**
     * Create all the features tables for the properties
     *
     * @return void
     */
    public function up()
    {
        foreach (PropertyFeatures::getFeatureCodes() as $feature) {
            $this->createFeatureTableWithPivot($feature);
        }
    }

    public function createFeatureTableWithPivot($featureName)
    {
        $featureTable = $featureName . 's';

        Schema::create($featureTable, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sortPos');
            $table->timestamps();
        });

        // create the pivot table
        $pivotName = $featureName < 'property' ? $featureName . '_property' : 'property_' . $featureName;

        Schema::create($pivotName, function(Blueprint $table) use ($featureName, $featureTable) {
            $table->integer($featureName . '_id')->unsigned()->index();
            $table->foreign($featureName . '_id')->references('id')->on($featureTable)->onDelete('cascade');
            $table->integer('property_id')->unsigned()->index();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $features = PropertyFeatures::getFeatureCodes();

        // drop the pivot tables
        foreach ($features as $feature) {
            $pivotName = $feature < 'property' ? $feature . '_property' : 'property_' . $feature;
            if (Schema::hasTable($pivotName)) {
                Schema::drop($pivotName);
            }
        }

        // drop the features tables
        foreach ($features as $feature) {
            $featureTable = $feature . 's';
            if (Schema::hasTable($featureTable)) {
                Schema::drop($featureTable);
            }
        }
    }
}
