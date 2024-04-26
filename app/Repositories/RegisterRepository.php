<?php
namespace App\Repositories;

use App\Models\User;

class RegisterRepository implements RegisterRepositoryInterface
{
    public function createUser(array $userData)
    {
        return User::create($userData);
    }
}