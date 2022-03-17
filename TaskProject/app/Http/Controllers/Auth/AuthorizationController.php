<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthorizationController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.authorization');
    }

    public function store(User $user, Request $request)
    {
        $this->validate($request, [
            'ApiKey' => 'required',
            'ApiSecret' => 'required',
            'ApiToken' => 'required',
        ]);

        User::create([
            'ApiKey' => $request->ApiKey,
            'ApiSecret' => $request->ApiSecret,
            'ApiToken' => $request->ApiToken,
        ]);

        $response = Http::get('https://api.trello.com/1/members/me?key='.$request->ApiKey.'&token='.$request->ApiSecret);
            return json_decode($response->body());


        return redirect()->route('tasks');
    }
}
