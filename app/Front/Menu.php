<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    //

    use SoftDeletes;

    protected $table = 'menus';

    protected $fillable = ['name','lang_flag','active'];


    public function items(){
        return $this->hasMany('App\Front\Item','menu_id','id');
    }

}
