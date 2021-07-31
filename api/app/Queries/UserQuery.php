<?php

namespace App\Queries;

use App\Models\User;

class UserQuery extends BaseQuery
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
