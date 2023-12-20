<?php


namespace App\Http\Filters\Var2\Worker;


use Illuminate\Database\Eloquent\Builder;

class IsMarried extends  AbstractFilter
{
    public function applyFilter(Builder $builder)
    {
        $builder->where('is_married', request('is_married'));
    }
}
