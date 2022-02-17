<?php

declare(strict_types=1);

namespace App\Infrastructure\Service;

use App\Infrastructure\Repository;
use App\Domain\User;
use App\UseCase;

class ModifyUserEmail
{
    private UseCase\ModifyUserEmail $modify_user_email;

    public function __construct()
    {
        $user_repository = new Repository\User();
        $this->modify_user_email = new UseCase\ModifyUserEmail($user_repository);
    }

    public function __invoke(int $an_user_id, string $an_email): bool
    {
        $user_id = new User\Id($an_user_id);
        $user_email = new User\Email($an_email);
        return $this->modify_user_email->__invoke($user_id, $user_email);
    }
}