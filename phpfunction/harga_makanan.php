<?php
function hitungTotalHarga($harga, $jumlah) {
    return $harga * $jumlah;
}

$totalHarga = hitungTotalHarga(10000, 2); // Output: 20000
echo "Total Harga: $totalHarga";
function hitungDiskon($harga, $jumlah, $diskon) {
    return ($harga * $jumlah) * ($diskon / 100);
}

$diskon = hitungDiskon(10000, 2, 10); // Output: 2000
echo "Diskon: $diskon";
function hitungBiayaPengiriman($biayaPerKg, $berat) {
    return $biayaPerKg * $berat;
}

$biayaPengiriman = hitungBiayaPengiriman(5000, 2); // Output: 10000
echo "Biaya Pengiriman: $biayaPengiriman";
function hitungTotalBiayaPembelian($harga, $jumlah, $biayaPengiriman) {
    return $harga * $jumlah + $biayaPengiriman;
}

$totalBiayaPembelian = hitungTotalBiayaPembelian(10000, 2, 10000) 
; // Output: 30000
echo "Total Biaya Pembelian: $totalBiayaPembelian";
function hitungRataRataNilai($nilai, $jumlah) {
    return $nilai / $jumlah;
}

$rataRataNilai = hitungRataRataNilai(10000, 2); // Output: 5000
echo "Rata-Rata Nilai: $rataRataNilai";
?>