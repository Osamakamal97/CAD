<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    //
    use SoftDeletes;
    protected $table='items';

    protected $fillable = ['name','menu_id','arpage_id','enpage_id','active'];


    /*
     * each item belongs to one menu
     *
     */
    public function menu(){
        return $this->belongsTo('App\Front\Menu','menu_id','id');
    }

    /*
     * each item could have many arabic pages
     */
    public function arPages(){
        return $this->hasMany('App\Front\Arpage','arpage_id','id');

    }


    /*
     * each item could have many english pages
     */
    public function enPages(){
        return $this->hasMany('App\Front\Enpage','enpage_id','id');
    }


}
