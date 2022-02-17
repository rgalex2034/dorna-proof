<?php

declare(strict_types=1);

namespace App\UseCase;

use App\Infrastructure\Repository;
use App\Domain\User;

class ModifyUserEmail
{
    public Repository\User $user_repository;

    public function __construct(Repository\User $an_user_repository)
    {
        $this->user_repository = $an_user_repository;
    }

    public function __invoke(User\Id $an_id, User\Email $an_user_email)
    {
        $user = $this->user_repository->load($an_id);
        $user->email($an_user_email);
        $ok = $this->user_repository->save($user);

        if ($ok) {
            /**
             * @todo Trigger user updated event
             */
            $user_updated_event = new User\Event\Updated();
            //Dispatch $user_updated_event object
        }

        return $ok;
    }
}