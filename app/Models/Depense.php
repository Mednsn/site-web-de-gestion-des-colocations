<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $fillable = ['title','montont','date_pose'];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

}
