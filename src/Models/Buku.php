<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\Timestampable;

class Buku
{
    use Timestampable;

    public function __construct(
        public string $judul,
        public string $penulis = '',
    ) {
        $this->touch();
    }

    public function info(): string
    {
        $penulisText = $this->penulis !== '' ? " - {$this->penulis}" : '';

        return "Buku: {$this->judul}{$penulisText} (Dibuat: {$this->getCreatedAt()})";
    }
}
