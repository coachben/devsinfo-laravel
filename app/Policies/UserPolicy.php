<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //laravel spatie actually prefers checks for permissions and not roles.
        //we can assign roles to users and permissions given to roles.
        return $user->hasRole(['super admin']) || $user->hasPermissionTo('view users');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(['super admin']) || $user->hasPermissionTo('manage users');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        return $user->hasRole(['super admin']) || $user->hasPermissionTo('manage users');
        //deactivate super admin for updates
        // return !$user->hasRole(['super admin']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        return $user->hasRole(['super admin']) || $user->hasPermissionTo('manage users');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return $user->hasRole(['super admin']) || $user->hasPermissionTo('manage users');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return $user->hasRole(['super admin']) || $user->hasPermissionTo('manage users');
    }
}
