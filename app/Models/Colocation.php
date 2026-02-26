<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colocation extends Model
{
    protected $fillable = ['name','description','status',];


    public function colocataires()
    {
        return $this->hasMany(Colocataire::class);
    }
    public function depenses()
    {
        return $this->hasMany(Depense::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
