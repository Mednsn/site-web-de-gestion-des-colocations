<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','colocation_id'];

    public function depenses()
    {
        return $this->hasMany(Depense::class);
    }
    public function colocations()
    {
        return $this->belongsTo(Colocation::class);;
    }
}

