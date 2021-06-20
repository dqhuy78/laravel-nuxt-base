<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;

class WebInitController extends Controller
{
    public function __invoke()
    {
        $user = new User();
        $user->id = 1;
        $user->email = 'demo@base.com';

        return $user ? new UserResource($user) : response()->json(['data' => null]);
    }
}
