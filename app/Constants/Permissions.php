<?php

namespace App\Constants;

class Permissions
{
    // Wallet Permissions
    public const VIEW_WALLET = 'view_wallet';
    public const CREATE_WALLET = 'create_wallet';
    public const UPDATE_WALLET = 'update_wallet';
    public const DELETE_WALLET = 'delete_wallet';

    // Transaction Permissions
    public const VIEW_TRANSACTION = 'view_transaction';
    public const CREATE_TRANSACTION = 'create_transaction';
    public const UPDATE_TRANSACTION = 'update_transaction';
    public const DELETE_TRANSACTION = 'delete_transaction';

    // User Permissions
    public const VIEW_USERS = 'view_users';
    public const CREATE_USERS = 'create_users';
    public const EDIT_USERS = 'update_users';
    public const DELETE_USERS = 'delete_users';

    // Role Permissions
    public const VIEW_ROLES = 'view_role';
    public const CREATE_ROLES = 'create_role';
    public const EDIT_ROLES = 'update_role';
    public const DELETE_ROLES = 'delete_role';

    // Permission Permissions
    public const VIEW_PERMISSIONS = 'view_permission';
    public const CREATE_PERMISSIONS = 'create_permission';
    public const EDIT_PERMISSIONS = 'update_permission';
    public const DELETE_PERMISSIONS = 'delete_permission';
}
