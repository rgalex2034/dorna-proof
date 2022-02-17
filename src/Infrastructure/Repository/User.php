<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain;

/**
 * Mockup class that mimics an user saved and an user loaded.
 */
class User implements Domain\User\Repository
{
    public function save(Domain\User $an_user): bool
    {
        return true;
    }

    public function load(Domain\User\Id $an_id): Domain\User
    {
        $user = new Domain\User(
            new Domain\User\Email("an.user@email.test")
        );
        $user->id($an_id);

        return $user;
    }
}