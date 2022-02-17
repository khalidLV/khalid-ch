<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $table = 'news' ;

    protected $primarykey = 'id' ;

    public function categories()
    {
        return $this->belongsToMany(category::class);
    }  
}
