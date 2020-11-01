<?php
/**
 * Created by PhpStorm.
 * User: Pham Huu Truong
 * Date: 11/1/2020
 * Time: 11:16 PM
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;


class ReverseScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->orderBy('id', 'desc');


    }
}