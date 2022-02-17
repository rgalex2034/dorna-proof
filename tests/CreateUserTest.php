<?php

declare(strict_types=1);

use App\Infrastructure\Service\CreateUser;
use PHPUnit\Framework\TestCase;

include __DIR__ . "/bootstrap.php";

class CreateUserTest extends TestCase
{
    public function testCreateUser(): void
    {
        $create_user = new CreateUser();
        $ok = $create_user("new.user@email.test");
        $this->assertTrue($ok, "User not created.");
    }
}