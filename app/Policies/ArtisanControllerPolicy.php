<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ArticleControllerPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role_id == 1
            ? Response::allow()
            : Response::deny('You don`t moderator');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->role_id == 1
            ? Response::allow()
            : Response::deny('You don`t moderator');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Article $article)
    {
        return $user->role_id == 1
            ? Response::allow()
            : Response::deny('You don`t moderator');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Article $article)
    {
        return $user->role_id == 1
            ? Response::allow()
            : Response::deny('You don`t moderator');
    }
}
