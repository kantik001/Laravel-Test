<?php

namespace App\Models;

use App\Events\Worker\CreatedEvent;
use App\Http\Filters\Var1\AbstractFilter;
use App\Http\Filters\Var2\Worker\From;
use App\Http\Filters\Var2\Worker\Name;
use App\Http\Filters\Var2\Worker\To;
use App\Models\Traits\HasFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use HasFactory;
    use HasFilter;
    use SoftDeletes;

    protected $table = 'workers';

    protected $guarded = false;

    public function getFilters(): array
    {
        return
            [
                From::class,
                To::class,
                Name::class,
            ];
    }

    protected static function booted()
    {

    }


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


    public function position()
    {
        return $this->belongsTo(Position::class);
    }

// $worker->projects

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }


    public function avatar()
    {
        return $this->morphOne(Avatar::class, 'avatarable');
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }


    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
