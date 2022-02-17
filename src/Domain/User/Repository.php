<?php

declare(strict_types=1);

namespace App\Domain\User;

use App\Domain\User;

interface Repository
{
    public function save(User $an_user): bool;

    public function load(User\Id $an_user_id): User;
}