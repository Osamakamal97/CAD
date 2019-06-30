<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    //
    use SoftDeletes;

    protected $table = 'messages';
    protected $fillable = ['name','email','subject','body','read'];
}
