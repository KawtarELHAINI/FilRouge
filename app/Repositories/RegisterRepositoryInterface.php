<?php

namespace App\Repositories;

use App\Models\User;

interface RegisterRepositoryInterface
{
    public function createUser(array $userData);
}