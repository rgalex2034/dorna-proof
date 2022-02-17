<?php

declare(strict_types=1);

use App\Infrastructure\Service\ModifyUserEmail;
use PHPUnit\Framework\TestCase;

include __DIR__ . "/bootstrap.php";

class ModifyUserEmailTest extends TestCase
{
    public function testCreateUser(): void
    {
        $modify_user_email = new ModifyUserEmail();
        $ok = $modify_user_email->__invoke(1, "new@email.test");
        $this->assertTrue($ok);
    }
}