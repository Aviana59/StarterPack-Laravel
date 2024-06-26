<?php

namespace App\Policies;

use App\Models\user;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(user $user): void
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(user $user, user $model): void
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(user $user): void
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(user $user, user $model): void
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(user $user, user $model): void
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(user $user, user $model): void
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(user $user, user $model): void
    {
        //
    }
}
