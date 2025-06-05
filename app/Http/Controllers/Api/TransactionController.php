<?php

namespace App\Http\Controllers\Api;

use App\Constants\Permissions;
use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TransactionController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Transaction::class);

        $transactions = Transaction::where('user_id', Auth::user()->id)->get();

        return $this->successResponse([
            'transactions' => $transactions
        ], 'Transactions retrieved successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransactionRequest $request)
    {
        $data = $request->validated();

        $wallet = Wallet::find($data['wallet_id']);
        $wallet->decrement('balance', $data['amount']);

        $transaction = Transaction::create([
            'wallet_id' => $data['wallet_id'],
            'category_id' => $data['category_id'],
            'sub_category_id' => $data['sub_category_id'],
            'user_id' => Auth::user()->id,
            'amount' => $data['amount'],
            'note' => $data['note'],
            'date' => $data['date']
        ]);

        return $this->successResponse(
            [
                'transaction_id' => $transaction->id
            ],
            'Transaction created successfully!'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        Gate::authorize('view', $transaction);

        $transaction->load([
            'wallet',
            'category.transactionType',
            'subCategory'
        ]);

        return $this->successResponse(
            $transaction,
            'Transaction retrieved successfully!'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        Gate::authorize(Permissions::UPDATE_TRANSACTION);

        $oldTransactionAmount = $transaction->amount;
        $oldWalletId = $transaction->wallet_id;

        $data = $request->validated();

        if ($data['wallet_id'] != $oldWalletId) {
            $oldWallet = Wallet::find($oldWalletId);
            $oldWallet->increment('balance', $oldTransactionAmount);

            $newWallet = Wallet::find($data['wallet_id']);
            $newWallet->decrement('balance', $data['amount']);
        } else {
            $wallet = Wallet::find($oldWalletId);
            $difference = $data['amount'] - $oldTransactionAmount;

            if ($difference > 0) {
                $wallet->decrement('balance', $difference);
            } elseif ($difference < 0) {
                $wallet->increment('balance', abs($difference));
            }
        }

        $transaction->update($data);

        return $this->successResponse(
            ['transaction_id' => $transaction->id],
            'Transaction updated successfully!'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        Gate::authorize(Permissions::DELETE_TRANSACTION);

        $transaction->delete();

        return $this->successResponse(null, "Transaction delete successfully!");
    }
}
