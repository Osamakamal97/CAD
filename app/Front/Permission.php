<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    //
    use SoftDeletes;

    protected $table = 'permissions';

    protected $fillable = ['name'];


    public function admins(){
        return $this->belongsToMany('App\Front\Admin','adminpermissions','permission_id','admin_id');
    }
}
