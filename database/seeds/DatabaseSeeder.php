<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

        factory(App\Property::class, 200)->create();
        factory(App\Architecture::class, 30)->create();
        factory(App\ExteriorFeature::class, 30)->create();

        $faker = Faker::create();

        // for all the properties created above
        for ($prop=1; $prop<=App\Property::all()->count(); $prop++) {
            // pick a random number of architectures to add
            $n = rand(1,15);
            $faker->unique(true)->numberBetween(1000, 2000);
            for ($j=0; $j < $n; $j++) {
                // pick a random architecture
                $arch = $faker->unique()->numberBetween(1, App\Architecture::all()->count());
                DB::table('architecture_property')->insert([
                    'architecture_id' => $arch,
                    'property_id' => $prop
                ]);
            }
            // pick a random number of exterior features to add
            $n = rand(1,15);
            $faker->unique(true)->numberBetween(1000, 2000);
            for ($j=0; $j < $n; $j++) {
                // pick a random exterior feature
                $ext = $faker->unique()->numberBetween(1, App\ExteriorFeature::all()->count());
                DB::table('exterior_feature_property')->insert([
                    'exterior_feature_id' => $ext,
                    'property_id' => $prop
                ]);
            }
        }

        Model::reguard();
    }
}
