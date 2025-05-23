<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\WalletRequest;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class WalletController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Wallet::class);

        $wallets = Wallet::where('user_id', Auth::user()->id)->get();

        return $this->successResponse($wallets, "Wallets retrieved successfully!");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WalletRequest $request)
    {
        $data = $request->validated();

        $wallet = Wallet::create([
            'name' => $data['name'],
            'balance' => $data['balance'],
            'currency' => $data['currency'],
            'user_id' => Auth::user()->id,
        ]);

        return $this->successResponse([
            'wallet_id' => $wallet->id
        ], "Wallet created successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallet)
    {
        Gate::authorize('view', $wallet);

        $wallet->load(['user', 'transactions']);

        return $this->successResponse($wallet, "Wallet retrieved successfully!");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WalletRequest $request, Wallet $wallet)
    {
        Gate::authorize('update', $wallet);

        $data = $request->validated();

        $wallet->update($data);

        return $this->successResponse([
            'wallet_id' => $wallet->id
        ], "Wallet updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallet)
    {
        Gate::authorize('delete', $wallet);

        $wallet->delete();

        return $this->successResponse(null, "Wallet deleted successfully!");
    }
}
