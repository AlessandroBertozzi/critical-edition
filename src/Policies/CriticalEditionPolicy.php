<?php


namespace AlessandroBertozzi\CriticalEdition\Policies;

use App\Models\User;
use Modules\CriticalEdition\Models\CriticalEdition;

class CriticalEditionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CriticalEdition $criticalEdition): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the project associated with critical edition.
     */
    public function viewProject(User $user, CriticalEdition $criticalEdition): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view manuscripts associated with critical edition.
     */
    public function viewManuscripts(User $user, CriticalEdition $criticalEdition): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CriticalEdition $criticalEdition): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CriticalEdition $criticalEdition): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CriticalEdition $criticalEdition): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CriticalEdition $criticalEdition): bool
    {
        //
    }
}
