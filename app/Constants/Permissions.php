<?php

namespace App\Constants;

class Permissions
{
    // Wallet Permissions
    public const VIEW_WALLET = 'view_wallet';
    public const CREATE_WALLET = 'create_wallet';
    public const UPDATE_WALLET = 'update_wallet';
    public const DELETE_WALLET = 'delete_wallet';

    // User Permissions
    public const VIEW_USERS = 'view_users';
    public const CREATE_USERS = 'create_users';
    public const EDIT_USERS = 'update_users';
    public const DELETE_USERS = 'delete_users';

    // Role Permissions
    public const VIEW_ROLES = 'view_roles';
    public const CREATE_ROLES = 'create_roles';
    public const EDIT_ROLES = 'update_roles';
    public const DELETE_ROLES = 'delete_roles';

    // Permission Permissions
    public const VIEW_PERMISSIONS = 'view_permissions';
    public const CREATE_PERMISSIONS = 'create_permissions';
    public const EDIT_PERMISSIONS = 'update_permissions';
    public const DELETE_PERMISSIONS = 'delete_permissions';
}
