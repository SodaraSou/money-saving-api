<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.user-index');
    }

    public function show(User $user)
    {
        $user = $user->load([
            'wallets',
            'transactions.category.transactionType'
        ]);

        return view('user.user-show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('user.user-create');
    }
}
