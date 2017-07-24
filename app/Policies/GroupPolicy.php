<?php

namespace App\Policies;

use App\Member;
use App\Group;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the group.
     *
     * @param  \App\Member  $user
     * @param  \App\Group  $group
     * @return mixed
     */
    public function view(Member $user, Group $group)
    {
        //
    }

    /**
     * Determine whether the user can create groups.
     *
     * @param  \App\Member  $user
     * @return mixed
     */
    public function create(Member $user)
    {
        //
    }

    /**
     * Determine whether the user can update the group.
     *
     * @param  \App\Member  $user
     * @param  \App\Group  $group
     * @return mixed
     */
    public function update(Member $user, Group $group)
    {
        //
    }

    /**
     * Determine whether the user can delete the group.
     *
     * @param  \App\Member  $user
     * @param  \App\Group  $group
     * @return mixed
     */
    public function delete(Member $user, Group $group)
    {
        //
    }
}
