<?php

declare(strict_types=1);

namespace App\Infrastructure\Service;

use App\Infrastructure\Repository;
use App\Domain\User;
use App\UseCase;

class CreateUser
{
    private UseCase\CreateUser $create_user;

    public function __construct()
    {
        $user_repository = new Repository\User();
        $this->create_user = new UseCase\CreateUser($user_repository);
    }

    public function __invoke(string $an_email): bool
    {
        $user = new User(new User\Email($an_email));
        return $this->create_user->__invoke($user);
    }
}