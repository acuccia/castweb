<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExteriorFeature extends Model
{

    static public function getExteriorFeatureList()
    {
        return [
            ['id' => 1, 'name' => 'Balcony', 'sortPos' => 1],
            ['id' => 2, 'name' => 'Barn', 'sortPos' => 2],
            ['id' => 3, 'name' => 'Basketball Court', 'sortPos' => 3],
            ['id' => 4, 'name' => 'Bridge', 'sortPos' => 4],
            ['id' => 5, 'name' => 'Carport', 'sortPos' => 5],
            ['id' => 6, 'name' => 'Corral', 'sortPos' => 6],
            ['id' => 7, 'name' => 'Courtyard', 'sortPos' => 7],
            ['id' => 8, 'name' => 'Fountain', 'sortPos' => 8],
            ['id' => 9, 'name' => 'Gazebo', 'sortPos' => 9],
            ['id' => 10, 'name' => 'Greenhouse', 'sortPos' => 10],
            ['id' => 11, 'name' => 'Golf/Putting Green', 'sortPos' => 11],
            ['id' => 12, 'name' => 'Lake', 'sortPos' => 12],
            ['id' => 13, 'name' => 'Pond', 'sortPos' => 13],
            ['id' => 14, 'name' => 'Rooftop', 'sortPos' => 14],
            ['id' => 15, 'name' => 'Stable', 'sortPos' => 15],
            ['id' => 16, 'name' => 'Treehouse', 'sortPos' => 16],
            ['id' => 17, 'name' => 'Waterfall', 'sortPos' => 17],
            ['id' => 18, 'name' => 'Large Grounds', 'sortPos' => 18],
            ['id' => 19, 'name' => 'Hills', 'sortPos' => 19],
            ['id' => 20, 'name' => 'Garden', 'sortPos' => 20],
        ];
    }
}
