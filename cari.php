<?php require "php/functions.php"; ?>

<?php
if (isset($_GET['judul'])) {
    $searchKeyword = urldecode($_GET['judul']);
}
?>

<?php include "header.php"; ?>

<main>

    <div class="kanan" id="carifood">
        <div class="section-title"> Hasil Pencarian untuk "<?php echo $searchKeyword ?>"</div>
        <?php $hasilPencarian = cariProdukByJudul($searchKeyword); ?>
        <div class="produk">
            <?php foreach ($hasilPencarian as $prod) : ?>
                <div class="card">
                    <a href="produk.php?judul=<?php echo urlencode($prod['judul']) ?>">
                        <div class="card-image-top">
                            <img src="<?php echo $prod['gambar_path']; ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="produk.php?judul=<?php echo urlencode($prod['judul']) ?>">
                                    <?php echo $prod['judul'] ?>
                                </a>
                            </h5>
                            <p class="card-harga">
                                <strong>Rp. <?php echo $prod['harga'] ?></strong>
                            </p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php include "footer.php"; ?>
