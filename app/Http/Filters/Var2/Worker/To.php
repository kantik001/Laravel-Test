<?php


namespace App\Http\Filters\Var2\Worker;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class To extends  AbstractFilter
{
    public function applyFilter(Builder $builder)
    {
        $builder->where('age', '<', request('to'));
    }
}



