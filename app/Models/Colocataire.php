<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Colocataire extends Pivot
{
    protected $table = 'colocataires';

    protected $fillable = ['is_owner', 'is_active', 'user_id', 'colocation_id'];

    
}
