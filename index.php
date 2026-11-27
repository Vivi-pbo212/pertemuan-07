<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Anggota;
use App\Models\Buku;
use App\Services\Peminjaman;

$buku = new Buku('Pemrograman PHP 8', 'Budi Raharjo');
$anggota = new Anggota('Novy Astoty');
$peminjaman = new Peminjaman();

echo $buku->info() . "\n";
echo $anggota->info() . "\n";
echo $peminjaman->pinjam($anggota, $buku) . "\n";
