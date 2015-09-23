<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{


    public function architectures(){
        return $this->belongsToMany(\App\Architecture::class)->orderBy('sortPos');
    }

    public function bathroomFeatures(){
        return $this->belongsToMany(\App\BathroomFeature::class)->orderBy('sortPos');
    }

    public function bedroomFeatures(){
        return $this->belongsToMany(\App\BedroomFeature::class)->orderBy('sortPos');
    }

    public function commercialFeatures(){
        return $this->belongsToMany(\App\CommercialFeature::class)->orderBy('sortPos');
    }

    public function DenFeatures(){
        return $this->belongsToMany(\App\DenFeature::class)->orderBy('sortPos');
    }

    public function diningFeatures(){
        return $this->belongsToMany(\App\DiningFeature::class)->orderBy('sortPos');
    }

    public function drivewayFeatures(){
        return $this->belongsToMany(\App\DrivewayFeature::class)->orderBy('sortPos');
    }

    public function entryFeatures(){
        return $this->belongsToMany(\App\EntryFeature::class)->orderBy('sortPos');
    }

    public function exteriorFeatures(){
        return $this->belongsToMany(\App\ExteriorFeature::class)->orderBy('sortPos');
    }

    public function garageFeatures(){
        return $this->belongsToMany(\App\GarageFeature::class)->orderBy('sortPos');
    }

    public function interiorFeatures(){
        return $this->belongsToMany(\App\InteriorFeature::class)->orderBy('sortPos');
    }

    public function kitchenFeatures(){
        return $this->belongsToMany(\App\KitchenFeature::class)->orderBy('sortPos');
    }

    public function livingFeatures(){
        return $this->belongsToMany(\App\LivingFeature::class)->orderBy('sortPos');
    }

    public function poolFeatures(){
        return $this->belongsToMany(\App\PoolFeature::class)->orderBy('sortPos');
    }

}
