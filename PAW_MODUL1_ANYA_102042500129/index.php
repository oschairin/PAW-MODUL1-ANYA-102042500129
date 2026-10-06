<?php

$produk = [
    [
        "nama" => "Laptop ASUS Vivobook",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 5
    ],
    [
        "nama" => "Mouse Logitech",
        "kategori" => "Aksesoris",
        "harga" => 150000,
        "stok" => 10
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Aksesoris",
        "harga" => 450000,
        "stok" => 0
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 350000,
        "stok" => 7
    ],
    [
        "nama" => "Webcam HD",
        "kategori" => "Kamera",
        "harga" => 275000,
        "stok" => 3
    ],
    [
        "nama" => "Flashdisk 64GB",
        "kategori" => "Penyimpanan",
        "harga" => 120000,
        "stok" => 0
    ]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store ♡</title>

    <link rel="stylesheet" href="style.css?v=8">
</head>

<body>

    <header>
        <nav class="navbar">
            <h1>Cia Store ♡</h1>

            <a href="#products">Lihat Produk</a>
        </nav>
    </header>

    <main>

        <section class="hero">
            <h2>Aesthetic-Tech Store.</h2>

            <p>
                Temukan berbagai perangkat dan aksesoris teknologi pilihan.
            </p>

            <a href="#products" class="hero-button">
                Belanja Sekarang
            </a>
        </section>

        <section>
            <p class="total-produk">
                Total Produk: <?= count($produk); ?>
            </p>
        </section>

        <section id="products">

            <h2>Daftar Produk</h2>

            <div class="product-grid">

                <?php foreach ($produk as $item) : ?>

                    <div class="product-card">

                        <div class="product-top">

                            <h3>
                                <?= $item["nama"]; ?>
                            </h3>

                            <span class="category-badge">
                                <?= $item["kategori"]; ?>
                            </span>

                        </div>

                        <?php if ($item["harga"] >= 1000000) : ?>

                            <?php
                                $diskon = 10;
                                $hargaDiskon =
                                    $item["harga"]
                                    - ($item["harga"] * $diskon / 100);
                            ?>

                            <p class="harga-normal">
                                Rp<?= number_format(
                                    $item["harga"],
                                    0,
                                    ',',
                                    '.'
                                ); ?>
                            </p>

                            <p class="diskon">
                                Diskon <?= $diskon; ?>%
                            </p>

                            <p class="harga-diskon">
                                Rp<?= number_format(
                                    $hargaDiskon,
                                    0,
                                    ',',
                                    '.'
                                ); ?>
                            </p>

                        <?php else : ?>

                            <p>
                                Harga:
                                Rp<?= number_format(
                                    $item["harga"],
                                    0,
                                    ',',
                                    '.'
                                ); ?>
                            </p>

                        <?php endif; ?>

                        <p>
                            Stok: <?= $item["stok"]; ?>
                        </p>

                        <div class="card-bottom">

                            <?php if ($item["stok"] > 0) : ?>

                                <span class="status available">
                                    Tersedia
                                </span>

                                <button class="buy-button">
                                    Beli Sekarang
                                </button>

                            <?php else : ?>

                                <span class="status unavailable">
                                    Stok Habis
                                </span>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </section>

    </main>

    <footer>
        <p>
            Cia Store. All rights reserved.
        </p>
    </footer>

</body>
</html>