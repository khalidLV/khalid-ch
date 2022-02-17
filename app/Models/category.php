<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category' ;

    protected $primarykey = 'id' ;

    public $timestamps = true ;

    public function news()
    {
        return $this->belongsToMany(news::class);
    }
    
    public function hasnews($new) {
        if ($this->news()->where('id', $new)->first())
        {
            return true;
        }
        return false;
    }

}
