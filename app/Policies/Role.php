<?php

namespace App\Policies;

use App\Models\User;

class Role
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        
    }
    
    public function root(User $user)
    {
        return $user->hasRole('root');
    }

    public function admin(User $user)
    {
        return $user->hasRole('admin');
    }

    public function user(User $user)
    {
        return $user->hasRole('user');
    }

    public function hasAnyRole(User $user, array $roles)
    {
        foreach ($roles as $role) {
            if ($user->hasRole($role)) {
                return true;
            }
        }
    }
}
