<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class zer_nav extends Model
{
    protected $primaryKey ='id_zernav';
    protected $guarded=['id_zernav'];
    public $timestamps=false;
    public function nav_bar()
    {
        return $this->belongsToMany(nav_bar::class,'nav_zernavs','navzer_id','nav_id');
    }
}
