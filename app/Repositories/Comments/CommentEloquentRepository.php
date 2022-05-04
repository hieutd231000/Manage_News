<?php

namespace App\Repositories\Comments;

use App\Models\Comment;
use App\Repositories\Eloquent\EloquentRepository;

class CommentEloquentRepository extends EloquentRepository implements CommentRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return Comment::class;
    }
}
