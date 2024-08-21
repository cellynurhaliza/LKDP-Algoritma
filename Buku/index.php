<?php

function hitungHargaTotal($jumlahBuku) {
    $hargaPerEks = 5000;
    $total = 0;
    $eks = $jumlahBuku * 10;

    if($eks <= 100) {
        $total = $eks * $hargaPerEks;
    } elseif($eks <= 200){
        $diskonPertama = 100 * $hargaPerEks * 0.95;
        $jumlahSisa = $eks - 100;
        $diskonSisa = $jumlahSisa * $hargaPerEks * 0.85;
        $total = $diskonPertama + $diskonSisa;
    } else {
        $diskonPertama = 100 * $hargaPerEks * 0.93;
        $diskonKedua = 100 * $hargaPerEks * 0.83;
        $jumlahSisa = $eks - 200;
        $diskonSisa = $jumlahSisa * $hargaPerEks * 0.73;
        $total = $diskonPertama + $diskonKedua + $diskonSisa;
    }

    return $total;
}

$jumlahBuku = 15;
$totalHarga = hitungHargaTotal($jumlahBuku);
echo "Total harga yang harus dibayar untuk $jumlahBuku buku adalah Rp. " . number_format($totalHarga, 0, ',', '.') . "\n";


