<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = ['monton','status','user_id','depense_id',];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function depenses()
    {
        return $this->belongsTo(Depense::class);
    }
}
