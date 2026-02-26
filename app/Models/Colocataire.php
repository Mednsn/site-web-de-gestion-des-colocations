<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colocataire extends Model
{
    protected $fillable = ['is_owner','is_active','user_id','colocation_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function colocations()
    {
        return $this->belongsTo(Colocation::class);
    }
}
