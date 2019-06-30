<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    //
    use SoftDeletes;

    protected $table='admins';
    protected $fillable = ['type','name','password','email','active','image'];


    public function permissions(){
        return $this->belongsToMany('App\Front\Permission','adminpermissions','admin_id','permission_id');
    }
}
