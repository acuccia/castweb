<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{


    public function architectures(){
        return $this->belongsToMany(\App\Architecture::class)->orderBy('name');
    }

    public function exteriorFeatures(){
        return $this->belongsToMany(\App\ExteriorFeature::class)->orderBy('name');
    }
}
