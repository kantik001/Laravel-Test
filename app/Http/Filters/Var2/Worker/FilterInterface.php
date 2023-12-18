<?php


namespace App\Http\Filters\Var2\Worker;


use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    public function applyFilter(Builder $builder);
}
