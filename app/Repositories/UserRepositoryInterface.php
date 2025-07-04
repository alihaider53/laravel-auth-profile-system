<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface {
    public function all();
    public function find(int $id);
    public function update(User $user, array $data);
    public function delete(User $user);
}

