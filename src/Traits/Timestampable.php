<?php

declare(strict_types=1);

namespace App\Traits;

trait Timestampable
{
    protected ?string $createdAt = null;

    public function touch(): void
    {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function getCreatedAt(): string
    {
        if ($this->createdAt === null) {
            $this->touch();
        }

        return $this->createdAt;
    }
}
