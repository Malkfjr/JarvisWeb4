<?php

$produk = [
    [
        "nama_barang" => "Printer",
        "harga" => 1200000 ,
        "deskripsi" => "Printer Merk HP",
        "stok" => 15
    ],
    [
        "nama_barang" => "Tablet",
        "harga" => 200000,
        "deskripsi" => "Tablet Merk Samsung",
        "stok" => 8
    ],
    [
        "nama_barang" => "Mouse",
        "harga" => 150000,
        "deskripsi" => "Mouse Merk Logitech",
        "stok" => 50
    ],
    [
        "nama_barang" => "Speaker",
        "harga" => 500000,
        "deskripsi" "Speaker Merk Sony",
        "stok" => 25
    ],
    [
        "nama_barang" => "Headset",
        "harga" => 250000,
        "deskripsi" => "Headset Merk Sony",
        "stok" => 30
    ]
];

foreach ($produk as $key => $item) {
    echo "<br>";
    echo "**Produk ke-" . ($key + 1) . "**" . "<br>";
    echo "Nama Barang: " . $item["nama_barang"] . "<br>";
    echo "Harga: Rp" . number_format($item["harga"], 0, ',', '.') . "<br>";
    echo "Deskripsi: " . $item["deskripsi"] . "<br>";
    echo "Stok: " . $item["stok"] . "<br>";
}

?>