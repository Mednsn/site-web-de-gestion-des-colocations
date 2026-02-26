<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colocation extends Model
{
    protected $fillable = ['name','status',];


    public function colocataires()
    {
        return $this->hasMany(Colocataire::class);
    }
}
