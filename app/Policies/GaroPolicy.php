<?php

namespace App\Policies;

use App\Garo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GaroPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any garos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the garo.
     *
     * @param  \App\User  $user
     * @param  \App\Garo  $garo
     * @return mixed
     */
    public function view(User $user, Garo $garo)
    {
        return $user->isAdmin()||$user->isAlumni()||$user->isStudent();
    }

    /**
     * Determine whether the user can create garos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the garo.
     *
     * @param  \App\User  $user
     * @param  \App\Garo  $garo
     * @return mixed
     */
    public function update(User $user, Garo $garo)
    {
                return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the garo.
     *
     * @param  \App\User  $user
     * @param  \App\Garo  $garo
     * @return mixed
     */
    public function delete(User $user, Garo $garo)
    {
      return $user->isAdmin();

    }

    /**
     * Determine whether the user can restore the garo.
     *
     * @param  \App\User  $user
     * @param  \App\Garo  $garo
     * @return mixed
     */
    public function restore(User $user, Garo $garo)
    {
             return $user->isAdmin();

    }

    /**
     * Determine whether the user can permanently delete the garo.
     *
     * @param  \App\User  $user
     * @param  \App\Garo  $garo
     * @return mixed
     */
    public function forceDelete(User $user, Garo $garo)
    {
                        return $user->isAdmin();

    }
}
