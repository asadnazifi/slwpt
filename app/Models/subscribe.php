<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class subscribe extends Model
{
    protected $guarded=['subscribe_id'];
    protected $dates=[ 
        'subscribes_expierd_at'
    ] ;
    public function user()
    {
        return $this->belongsTo(User::class,'subscribes_user_id');
    }

}
