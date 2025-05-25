<?php

namespace App\Http\Controllers;

use App\Models\Wallet;

class WalletController extends Controller
{
    public function index()
    {
        return view('wallet.wallet-index');
    }

    public function show(Wallet $wallet)
    {
        return view('wallet.wallet-show');
    }

    public function create()
    {
        return view('wallet.wallet-create');
    }

    public function edit(Wallet $wallet)
    {
        return view('wallet.wallet-edit');
    }
}
