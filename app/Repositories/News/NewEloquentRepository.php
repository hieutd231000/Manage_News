<?php

namespace App\Repositories\News;

use App\Models\News;
use App\Repositories\Eloquent\EloquentRepository;

class NewEloquentRepository extends EloquentRepository implements NewRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return News::class;
    }
}
