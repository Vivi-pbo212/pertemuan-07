<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Anggota;
use App\Models\Buku;
use App\Traits\Timestampable;

class Peminjaman
{
    use Timestampable;

    /** @var array<int, array<string, mixed>> */
    private array $daftarPinjam = [];

    public function __construct()
    {
        $this->touch();
    }

    public function pinjam(Anggota $anggota, Buku $buku): string
    {
        $this->touch();

        $catatan = [
            'anggota' => $anggota->nama,
            'buku' => $buku->judul,
            'waktu' => $this->getCreatedAt(),
        ];

        $this->daftarPinjam[] = $catatan;

        return "{$anggota->nama} meminjam \"{$buku->judul}\" pada {$catatan['waktu']}";
    }

    /** @return array<int, array<string, mixed>> */
    public function getDaftarPinjam(): array
    {
        return $this->daftarPinjam;
    }
}
