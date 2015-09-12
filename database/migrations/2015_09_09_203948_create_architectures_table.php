<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchitecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('architectures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sortPos');
            $table->timestamps();
        });

        // seed the table
        $data = [];
        $architectures = \App\Architecture::getArchitectureList();
        foreach ($architectures as $architecture) {
            $data[] = array(
                'id' => $architecture['id'],
                'name' => $architecture['name'],
                'sortPos' => $architecture['sortPos']
            );
        }
        DB::table('architectures')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('architectures');
    }
}
