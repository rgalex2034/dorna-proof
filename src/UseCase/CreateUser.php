<?php

declare(strict_types=1);

namespace App\UseCase;

use App\Infrastructure\Repository;
use App\Domain\User;

class CreateUser
{
    public Repository\User $user_repository;

    public function __construct(Repository\User $an_user_repository)
    {
        $this->user_repository = $an_user_repository;
    }

    public function __invoke(User $an_user)
    {
        $ok = $this->user_repository->save($an_user);

        if ($ok) {
            /**
             * @todo Trigger user created event
             */
            $user_created_event = new User\Event\Created();
            //Dispatch $user_created_event object
        }

        return $ok;
    }
}