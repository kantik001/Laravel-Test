<?php


namespace App\Http\Filters\Var1;


use Illuminate\Database\Eloquent\Builder;

class WorkerFilter extends AbstractFilter
{
    const NAME = 'name';
    const SURNAME = 'surname';
    const EMAIL = 'email';
    const AGE_FROM = 'from';
    const AGE_TO = 'to';
    const DESCRIPTION = 'description';
    const IS_MARRIED = 'is_married';


    public function getCallbacks(): array
    {
        return [
            self::NAME => 'name',
            self::SURNAME => 'surname',
            self::EMAIL => 'email',
            self::AGE_FROM => 'ageFrom',
            self::AGE_TO => 'ageTo',
            self::DESCRIPTION => 'description',
            self::IS_MARRIED => 'isMarried',
        ];
    }


    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }


    public function surname(Builder $builder, $value)
    {
        $builder->where('surname', 'like', "%{$value}%");

    }

    public function email(Builder $builder, $value)
    {
        $builder->where('email', 'like', "%{$value}%");

    }

    public function ageFrom(Builder $builder, $value)
    {
        $builder->where('age', '>', $value);

    }

    public function ageTo(Builder $builder, $value)
    {
        $builder->where('age', '<', $value);

    }

    public function description(Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");

    }

    public function isMarried(Builder $builder, $value)
    {
        $builder->where('is_married', true);

    }





}
