<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_category extends Model
{
    use HasFactory;

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    public $table = 'news_category';
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $fillable = [
        'news_id','category_id'
    ];
}
