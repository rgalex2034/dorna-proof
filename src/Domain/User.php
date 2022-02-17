<?php

declare(strict_types=1);

namespace App\Domain;

use App\Shared\Domain\AbstractAggregateRoot;

class User extends AbstractAggregateRoot
{
    private User\Id $id;
    private User\Email $email;

    public function __construct(User\Email $email)
    {
        $this->email = $email;
    }

    public function id(?User\Id $an_user_id = null): User\Id
    {
        if ($an_user_id) {
            $this->id = $an_user_id;
        }

        return $this->id;
    }

    public function email(User\Email $an_email): User\Email
    {
        if ($an_email) {
            $this->email = $an_email;
        }

        return $this->email;
    }
}