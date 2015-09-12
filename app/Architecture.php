<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Architecture extends Model
{
    //

    static public function getArchitectureList()
    {
        return [
            ['id' => 1, 'name' => 'Anywhere USA', 'sortPos' => 1],
            ['id' => 2, 'name' => 'Art Deco', 'sortPos' => 2],
            ['id' => 3, 'name' => 'Beach', 'sortPos' => 3],
            ['id' => 4, 'name' => 'Brick', 'sortPos' => 4],
            ['id' => 5, 'name' => 'Bungalow', 'sortPos' => 5],
            ['id' => 6, 'name' => 'Cabin', 'sortPos' => 6],
            ['id' => 7, 'name' => 'Cape Cod', 'sortPos' => 7],
            ['id' => 8, 'name' => 'Castle', 'sortPos' => 8],
            ['id' => 9, 'name' => 'Clapboard', 'sortPos' => 9],
            ['id' => 10, 'name' => 'Colonial', 'sortPos' => 10],
            ['id' => 11, 'name' => 'Contemporary', 'sortPos' => 11],
            ['id' => 12, 'name' => 'Craftsman', 'sortPos' => 12],
            ['id' => 13, 'name' => 'English', 'sortPos' => 13],
            ['id' => 14, 'name' => 'European', 'sortPos' => 14],
            ['id' => 15, 'name' => 'Farm', 'sortPos' => 15],
            ['id' => 16, 'name' => "50's, 60's or 70's", 'sortPos' => 16],
            ['id' => 17, 'name' => 'French', 'sortPos' => 17],
            ['id' => 18, 'name' => 'Gothic', 'sortPos' => 18],
            ['id' => 19, 'name' => 'High Tech', 'sortPos' => 19],
            ['id' => 20, 'name' => 'Italian', 'sortPos' => 20],
            ['id' => 21, 'name' => 'Loft', 'sortPos' => 21],
            ['id' => 22, 'name' => 'Mediterranean', 'sortPos' => 22],
            ['id' => 23, 'name' => 'Modern', 'sortPos' => 23],
            ['id' => 24, 'name' => 'Ranch', 'sortPos' => 24],
            ['id' => 25, 'name' => 'Rustic', 'sortPos' => 25],
            ['id' => 26, 'name' => 'Southwest', 'sortPos' => 26],
            ['id' => 27, 'name' => 'Spanish', 'sortPos' => 27],
            ['id' => 28, 'name' => 'Split Level', 'sortPos' => 28],
            ['id' => 29, 'name' => 'Stone', 'sortPos' => 29],
            ['id' => 30, 'name' => 'Tract', 'sortPos' => 30],
            ['id' => 31, 'name' => 'Tropical', 'sortPos' => 31],
            ['id' => 32, 'name' => 'Tudor', 'sortPos' => 32],
            ['id' => 33, 'name' => 'Victorian', 'sortPos' => 33],
        ];
    }
}
