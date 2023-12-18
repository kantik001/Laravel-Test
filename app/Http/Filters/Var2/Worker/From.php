<?php


namespace App\Http\Filters\Var2\Worker;


use Illuminate\Database\Eloquent\Builder;

class From extends  AbstractFilter
{
    public function applyFilter(Builder $builder)
    {
        $builder->where('age', '>', request('from'));
    }
}
