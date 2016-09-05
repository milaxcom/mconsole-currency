<?php

namespace Milax\Mconsole\Currency\Repositories;

use Milax\Mconsole\Currency\Contracts\CurrenciesRepository as Repository;
use Milax\Mconsole\Repositories\EloquentRepository;

class CurrenciesRepository extends EloquentRepository implements Repository
{
    public $model = \Milax\Mconsole\Currency\Models\Currency::class;
}