<?php

namespace App\Http\Controllers;

use App\Models\TransactionType;

class TransactionController extends Controller
{
    public function indexTransactionType()
    {
        return view('transaction.transaction-type-index');
    }

    public function createTransactionType()
    {
        return view('transaction.transaction-type-create');
    }

    public function editTransactionType(TransactionType $transaction_type)
    {
        return view('transaction.transaction-type-edit', [
            'transaction_type' => $transaction_type
        ]);
    }
}
