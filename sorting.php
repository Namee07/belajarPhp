<?php
// 4 metode sorting (pencarian)

function counting($array) {
    // Cari nilai maksimum pada array
    $max = max($array);

    // Buat array penghitung dengan ukuran sesuai nilai max + 1
    // Agar bisa menghitung jumlah kemunculan nilai 0 sampai max
    $count = array_fill(0, $max + 1, 0);

    // Menghitung frekuensi kemunculan setiap elemen pada array asli
    foreach ($array as $value) {
        $count[$value]++; // Menambahkan 1 pada indeks yang sesuai dengan nilai $value
    }

    // Hasilkan array yang terurut berdasarkan frekuensi
    $urutkan = [];
    foreach ($count as $value => $frekuensi) {
        for ($i = 0; $i < $frekuensi; $i++) {
            $urutkan[] = $value; // Menambahkan nilai $value ke array $urutkan sebanyak $frekuensi kali
        }
    }

    return $urutkan;
}

// Contoh penggunaan

$array = [4, 2, 2, 8, 3, 3, 1];
echo "Array asli 👉 : ";
print_r($array);

// Memanggil fungsi counting untuk mengurutkan array
$urutkan = counting($array);

echo '<br><br>Array telah diurutkan 👉 : ';
print_r($urutkan);
?>

