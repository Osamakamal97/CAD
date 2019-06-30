<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adminpermission extends Model
{
    //
    use SoftDeletes;

    protected  $table= 'adminpermissions';

    protected $fillable = ['admin_id','permission_id','active'];


}
