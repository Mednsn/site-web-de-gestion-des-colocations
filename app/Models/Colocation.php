<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colocation extends Model
{
    protected $fillable = ['name', 'description', 'status',];


    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'colocataires',
            'colocation_id',
            'user_id'
        )
            ->using(Colocataire::class)
            ->as('colocataires')
            ->withPivot(['id', 'is_owner', 'is_active'])
            ->withTimestamps();
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
