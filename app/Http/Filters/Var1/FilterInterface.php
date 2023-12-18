<?php


namespace App\Http\Filters\Var1;


use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    public function applyFilter(Builder $builder);
}
