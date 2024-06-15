<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Faker\Factory as Faker;

class AuthController extends Controller
{
    public function login()
    {
        $faker = Faker::create();

        $user = User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('password'),
        ]);

        Auth::login($user);

        $token = $user->createToken('authToken');

        return response()->json(['token' => $token->plainTextToken]);
    }
}
