<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nav_bar extends Model
{
    protected $primaryKey ='id_nav';
    protected $guarded=['id_nav'];


    public $timestamps=false;
    public function nav_zernav()
    {
        return $this->belongsToMany(zer_nav::class,'nav_zernavs','nav_id','navzer_id');
    }
}

