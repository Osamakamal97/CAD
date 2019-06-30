<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subitem extends Model
{
    //
    use SoftDeletes;
    protected $table = 'subitems';

    protected $fillable = ['name','item_id','arpage_id','enpage_id','active'];
}
