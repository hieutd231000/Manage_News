<?php

namespace App\Repositories\Users;

use App\Models\User;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Support\Facades\DB;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return User::class;
    }

    /**
     * Check admin(0)/user(1) function
     *
     * @param $userId
     * @return bool|void
     */
    public function checkRole($userId)
    {
        $user = DB::table("users")
            ->where("id", $userId)
            ->first();
        if($user->role) {
            return true;
        }
    }
}