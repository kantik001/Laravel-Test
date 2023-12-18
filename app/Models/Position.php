<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $guarded = false;


    public function workers()
    {
        return $this->hasMany(Worker::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function queryWorker()
    {
        return $this->hasOne(Worker::class)->where('surname', '=','Krasavina');
    }

}
