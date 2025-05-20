<?php require "php/functions.php"?>
<?php include "headerwelcome.php" ?>

<main>
    
<?php include "kategori_button.php"?>

    <div class="kanan">
    <div class="section-title">Beranda</div>
    <?php $produk = getProduk(12); ?>
    <div class="produk">
        <?php foreach($produk as $prod): ?>
            <div class="card">
            <a href="produk.php?judul=<?php echo urlencode($prod['judul'])?>#detail-produk">         
                <img class="card-img-top" src="<?php echo $prod['gambar_path']; ?>" alt="<?php echo $prod['judul']; ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="produk.php?judul=<?php echo urlencode($prod['judul'])?>#detail-produk">
                            <?php echo $prod['judul'] ?>
                            </a>
                        </h5>
                        <p class="card-harga"><strong>Rp. <?php echo $prod['harga'] ?></strong></p>
                    </div>
            </a>

            </div>
        <?php endforeach; ?>
    </div>
</div>

</main>



