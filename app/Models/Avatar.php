<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function avatarable()
    {
        return $this->morphTo();
    }

}
