<?php

namespace App\Repositories\Contracts;

interface UserBookRepositoryInterface extends RepositoryInterface
{
    public function selectUser($userId);

    public function favorites();

    public function findRate($book_id, $user_id);

    public function findLikeByBookId ($book_id);
}
