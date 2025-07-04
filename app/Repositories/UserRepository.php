<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface {

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all() {
        return User::all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id) {
        return User::findOrFail($id);
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     */
    public function update(User $user, array $data) {
        $user->update($data);
        return $user;
    }

    /**
     * @param User $user
     * @return bool|null
     */
    public function delete(User $user) {
        return $user->delete();
    }

    /**
     * @return mixed
     */
    public function count() {
        return User::count();
    }
}
