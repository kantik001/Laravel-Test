<?php


namespace App\Models\Traits;


use App\Http\Filters\Var1\AbstractFilter;
use App\Http\Filters\Var2\Worker\From;
use App\Http\Filters\Var2\Worker\Name;
use App\Http\Filters\Var2\Worker\To;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

trait HasFilter
{
    public function scopeFilter(Builder $builder, AbstractFilter $filter)
    {
        $filter->applyFilter($builder);
        return $builder;
    }

}
