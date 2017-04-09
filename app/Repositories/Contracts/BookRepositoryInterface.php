<?php

namespace App\Repositories\Contracts;

interface BookRepositoryInterface extends RepositoryInterface
{
    public function deleteAll(array $ids);

    public function findLatest();

    public function findMostPopular();

    public function search($search);

    public function theSameCategory($id, $category_id);
}
