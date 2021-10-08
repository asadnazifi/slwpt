<?php

namespace App;

use App\Models\Package;
use App\Models\subscribe;
use App\Models\UserPackage;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];
        protected $guarded=['role'];
    protected $hidden = [
        'Password', 'remember_token',
    ];
    public function setPasswordAttribute($value)
    {
        $this->attributes['Password']=bcrypt($value);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class,'package_file','id','payment_user_id');
    }
    public function subscribes()
    {
        return $this->hasMany(subscribe::class,'subscribe_user_id');
    }
    public function packages()
    {
        return$this->belongsToMany(Package::class,'user_packages','user_id','package_id')->withPivot(['amount','carated_at']);
    }
    

}