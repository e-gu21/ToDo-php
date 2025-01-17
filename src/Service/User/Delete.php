<?php

declare(strict_types=1);

namespace App\Service\User;

final class Delete extends Base
{
    public function delete(int $userId): void
    {
        $this->userRepository->deleteUserTasks($userId);
        $this->userRepository->deleteUser($userId);
    }
}
