<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $user = $userModel->first();

        $data = [
            'user' => $user
        ];

        return view('profile', $data);
    }
}