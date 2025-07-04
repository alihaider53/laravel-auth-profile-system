<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\UploadedFile;

class UserService {
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * User Listing
     * @return mixed
     */
    public function listUsers() {
        return $this->userRepository->all();
    }

    /**
     * Get Single User
     * @param $id
     * @return mixed
     */
    public function getUser($id) {
        return $this->userRepository->find($id);
    }

    /**
     * Update User
     * @param $user
     * @param array $data
     * @return mixed
     */
    public function updateUser($user, array $data) {
        if (isset($data['avatar']) && $data['avatar'] instanceof UploadedFile) {
            $path = $data['avatar']->store('avatars', 'public');
            $data['avatar'] = $path;
        }
        return $this->userRepository->update($user, $data);
    }

    /**
     * Delete User
     * @param $user
     * @return mixed
     */
    public function deleteUser($user) {
        return $this->userRepository->delete($user);
    }

    /**
     * @return mixed
     */
    public function countUsers() {
        return $this->userRepository->count();
    }
}

