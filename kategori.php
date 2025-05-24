<?php require "php/functions.php"?>

<?php
    if(isset($_GET['kategori'])){
        $meow = urldecode($_GET['kategori']);
    }
?>

<?php include "header.php"; ?>

<?php include "headerwelcome.php" ?>


<main>
    
<?php include "kategori_button.php"?>

    <div class="kanan" id="kategoriii">
        <div class="section-title"> Makanan dengan kategori  " <?php echo ucfirst($meow) ?> "</div>
        <?php $produk = getProdukByKategori($meow) ?>
        <div class="produk">
                <?php
                foreach($produk as $prod){
                ?>
                    <div class="card">
                        <a href="produk.php?judul=<?php echo urlencode($prod['judul']) ?>#detail-produk">
                            <div class="card-image-top">
                                <img class="card-img-top" src="<?php echo $prod['gambar_path']; ?>" alt="<?php echo $prod['judul']; ?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="produk.php?judul=<?php echo urlencode($prod['judul']) ?>detail-produk">
                                        <?php echo $prod['judul']?>                       
                                    </a>
                                </h5>
                                <p class="card-harga">
                                    <strong>Rp. <?php echo $prod['harga'] ?></strong>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
        </div>
    </div>
</main>

<?php include "footer.php"; ?>


