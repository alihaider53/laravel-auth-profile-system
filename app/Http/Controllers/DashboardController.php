<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Routing\Controller;

class DashboardController extends Controller {
    protected $userService;

    public function __construct(UserService $userService) {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    public function index() {
        $userCount = $this->userService->countUsers();
        return view('dashboard', compact('userCount'));
    }
}

