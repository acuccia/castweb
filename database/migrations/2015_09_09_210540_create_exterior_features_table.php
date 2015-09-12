<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExteriorFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exterior_features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sortPos');
            $table->timestamps();
        });

        // seed the table
        $data = [];
        $features = \App\ExteriorFeature::getExteriorFeatureList();
        foreach ($features as $feature) {
            $data[] = array(
                'id' => $feature['id'],
                'name' => $feature['name'],
                'sortPos' => $feature['sortPos']
            );
        }
        DB::table('exterior_features')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exterior_features');
    }
}
