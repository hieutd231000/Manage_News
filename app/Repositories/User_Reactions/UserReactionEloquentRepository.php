<?php

namespace App\Repositories\User_Reactions;

use App\Models\User_Reaction;
use App\Repositories\Eloquent\EloquentRepository;

class UserReactionEloquentRepository extends EloquentRepository implements UserReactionRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return User_Reaction::class;
    }
}
