<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class Payment extends Model
{
    protected $guarded = ['paymentid'];
    const CREATED_AT = 'payment_created_at';
    const UPDATED_AT = 'payment_update_at';
    const ONLINE =1;
    const WALLET =2;
    const COMPLETE = 1;
    const INCOMPLETE = 2;
    public function user()
    {
        return $this->belongsTo(User::class,'package_file','payment_user_id','id');
    }
    public function payment_method_formt()
    {
        switch($this->attributes['payment_method']){
            case self::ONLINE:
                return 'انلاین';
                
                break;
            case self::WALLET:
                return 'کیف پول';

                break;
        }

    }
    public function payment_status_formt()
    {
        switch($this->attributes['payment_status']){
            case self::COMPLETE:
                return 'پرداخت';
                
                break;
            case self::INCOMPLETE:
                return 'ناقض';

                break;
        }

    }
}
