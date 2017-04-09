<?php

namespace App\Repositories\Eloquent;

use App\Models\UserBook;
use App\Repositories\Contracts\UserBookRepositoryInterface;

class UserBookRepository extends BaseRepository implements UserBookRepositoryInterface
{
    public function model()
    {
        return UserBook::class;
    }

    public function selectUser($userId)
    {
        return $this->model->where('user_id', $userId);
    }

    public function favorites()
    {
        return $this->model->where('favorite', 1);
    }

    public function findRate($book_id, $user_id)
    {
        return $this->model->where(['book_id' => $book_id, 'user_id' => $user_id])
            ->where('rate', '<>', 0);
    }

    public function findLikeByBookId ($book_id)
    {
        return $this->model->where('book_id', $book_id)
            ->where('like', '<>', 0);
    }
}
