<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $primaryKey='file_id';


    protected $guarded=['file_id'];
    public function packages()
    {
        return $this->belongsToMany(Package::class,'package_file','file_id','package_id');
    }
    public function getFileTypeTextAttribute()
    {
        $type=[
            'sdsadsa'=>'pdf',
            'dsaa'=>'sada',

        ];
        return $type[$this->attributes['file_type']];
    }
}
