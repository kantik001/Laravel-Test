<?php


namespace App\Http\Filters\Var2\Worker;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

abstract class AbstractFilter implements FilterInterface
{
    public function handle(Builder $builder, \Closure $next)
    {
        if (request($this->getName())) {
            $this->applyFilter($builder);
        }
        return $next($builder);
    }


    public function getName(): string
    {
        return Str::snake(class_basename($this));
    }
}
