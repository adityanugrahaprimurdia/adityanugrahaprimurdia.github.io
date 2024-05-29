<?php
function hitungDiskon($harga, $persentaseDiskon) {
    return $harga - ($harga * ($persentaseDiskon / 100));
}

$harga = 100;
$persentaseDiskon = 10;
$hargaDiskon = hitungDiskon($harga, $persentaseDiskon);
echo "Harga diskon adalah: " . number_format($hargaDiskon, 2) . "<br>";

function cekMetodePembayaran($metodePembayaran) {
    $metodePembayaranValid = ['credit_card', 'paypal', 'bank_transfer'];
    return in_array($metodePembayaran, $metodePembayaranValid);
}

$metodePembayaran = 'credit_card';
if (cekMetodePembayaran($metodePembayaran)) {
    echo "Metode pembayaran adalah valid";
} else {
    echo "Metode pembayaran adalah invalid";
}

function hitungBiayaKirim($berat, $jarak) {
    $biayaDasar = 10;
    $biayaPerKg = 2;
    $biayaPerKm = 0.5;
    return $biayaDasar + ($berat * $biayaPerKg) + ($jarak * $biayaPerKm);
}

$berat = 5;
$jarak = 100;
$biayaKirim = hitungBiayaKirim($berat, $jarak);
echo "Biaya kirim adalah: " . number_format($biayaKirim, 2) . "<br>";

function buatRingkasanPesanan($itemPesanan) {
    $totalHarga = 0;
    $ringkasan = '';
    foreach ($itemPesanan as $item) {
        $totalHarga += $item['harga'] * $item['jumlah'];
        $ringkasan .= "$item[nama] x $item[jumlah] = " . number_format($item['harga'] * $item['jumlah'], 2) . "\n";
    }
    return "Ringkasan Pesanan:\n" . number_format($totalHarga, 2) . "\n" . $ringkasan;
}

$itemPesanan = [
    ['nama' => 'Produk A', 'harga' => 10, 'jumlah' => 2],
    ['nama' => 'Produk B', 'harga' => 20, 'jumlah' => 3],
    ['nama' => 'Produk C', 'harga' => 30, 'jumlah' => 1],
];

$ringkasanPesanan = buatRingkasanPesanan($itemPesanan);
echo $ringkasanPesanan . "<br>";

function cekJikaProdukTersedia($idProduk, $stokProduk) {
    return isset($stokProduk[$idProduk]) && $stokProduk[$idProduk] > 0;
}

$idProduk = 123;
$stokProduk = [
    123 => 10,
    456 => 5,
    789 => 0,
];

if (cekJikaProdukTersedia($idProduk, $stokProduk)) {
    echo "Produk tersedia";
} else {
    echo "Produk tidak tersedia";
}
?>
