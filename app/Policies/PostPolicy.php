<?php

namespace App\Policies;

use App\Models\Beranda;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    public function delete(User $user, Beranda $id){
        return $user->id === $id->user_id;
    }
}