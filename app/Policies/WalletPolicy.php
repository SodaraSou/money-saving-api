<?php

namespace App\Policies;

use App\Constants\Permissions;
use App\Models\User;
use App\Models\Wallet;

class WalletPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo(Permissions::VIEW_WALLET);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Wallet $wallet): bool
    {
        return $user->hasPermissionTo(Permissions::VIEW_WALLET)
            && $wallet->user_id == $user->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo(Permissions::CREATE_WALLET);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Wallet $wallet): bool
    {
        return $user->hasPermissionTo(Permissions::UPDATE_WALLET)
            && $wallet->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Wallet $wallet): bool
    {
        return $user->hasPermissionTo(Permissions::DELETE_WALLET)
            && $wallet->user_id == $user->id;
    }
}
