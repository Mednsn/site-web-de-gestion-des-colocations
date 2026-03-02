<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = ['email','status','user_id','colocation_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function colocations()
    {
        return $this->belongsTo(Colocation::class);
    }
}
