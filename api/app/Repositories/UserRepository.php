<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    /**
     * The entity associated with this repository.
     *
     * @var object
     */
    public function model()
    {
        return new User();
    }
}
