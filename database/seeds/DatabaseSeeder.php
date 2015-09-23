<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Http\Utilities\PropertyFeatures;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->randomSeed();
        //$this->importSeed();

        Model::reguard();
    }

    public function importSeed()
    {
        // import data from old website

        $this->resetTables();




    }

    public function randomSeed()
    {
        // create random data

        $this->resetTables();

        $faker = Faker::create();

        factory(App\Property::class, 200)->create();

        // seed the feature tables
        foreach (PropertyFeatures::getFeatureCodes() as $feature) {
            $featureTable = $feature . 's';

            // create the features
            $data = [];
            for ($i=1; $i<=15;$i++) {
                $data[] = array(
                    'id' => $i,
                    'name' => $faker->word,
                    'sortPos' => $i
                );
            }

            DB::table($featureTable)->insert($data);

            // assign some features to each property
            $pivotTable = $feature < 'property' ? $feature . '_property' : 'property_' . $feature;
            $featureKey = $feature . '_id';

            for ($prop=1; $prop<=App\Property::all()->count(); $prop++) {
                // pick a random number of features to add
                $n = rand(1,15);
                // reset the faker unique setting
                $faker->unique(true)->numberBetween(1000, 2000);
                for ($j=0; $j < $n; $j++) {
                    // pick a random architecture
                    $feature_id = $faker->unique()->numberBetween(1, 15);
                    DB::table($pivotTable)->insert([
                        $featureKey => $feature_id,
                        'property_id' => $prop
                    ]);
                }
            }
        }


//        // for all the properties created above
//        for ($prop=1; $prop<=App\Property::all()->count(); $prop++) {
//            // pick a random number of architectures to add
//            $n = rand(1,10);
//            $faker->unique(true)->numberBetween(1000, 2000);
//            for ($j=0; $j < $n; $j++) {
//                // pick a random architecture
//                $arch = $faker->unique()->numberBetween(1, App\Architecture::all()->count());
//                DB::table('architecture_property')->insert([
//                    'architecture_id' => $arch,
//                    'property_id' => $prop
//                ]);
//            }
//            // pick a random number of exterior features to add
//            $n = rand(1,10);
//            $faker->unique(true)->numberBetween(1000, 2000);
//            for ($j=0; $j < $n; $j++) {
//                // pick a random exterior feature
//                $ext = $faker->unique()->numberBetween(1, App\ExteriorFeature::all()->count());
//                DB::table('exterior_feature_property')->insert([
//                    'exterior_feature_id' => $ext,
//                    'property_id' => $prop
//                ]);
//            }
//        }
    }

    public function resetTables()
    {
        // reset the tables
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        foreach (PropertyFeatures::getFeatureCodes() as $feature) {
            $featureTable = $feature . 's';
            $pivotTable = $feature < 'property' ? $feature . '_property' : 'property_' . $feature;

            // truncate the pivot table
            DB::table($pivotTable)->truncate();

            // truncate the feature table
            DB::table($featureTable)->truncate();
        }
        DB::table('properties')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
    }
}
