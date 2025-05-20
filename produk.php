<?php require "php/functions.php"?>

<?php
    if(isset($_GET['judul'])){
        $judull = urldecode($_GET['judul']);
        $produk = getProdukByJudul($judull);
    }
?>

<?php include "header.php"; ?>


<main>
    
<?php include "kategori_button.php"?>

    <div class="kanan">
        <div class="section-title"> Detail Makanan</div>
        
        <div class="produk" id="detail-produk">

        <?php
            
            foreach($produk as $prod){
                ?>

            <div class="produk-kiri">
                <img src="<?php echo $prod['gambar_path']; ?>" alt="">
            </div>
            <div class="produk-kanan">
                <p class="judul">
                    <?php echo $prod['judul']?>
                </p>
                <p class="deskripsi">
                    <?php echo $prod['isi']?>
                </p>
                <p class="harga">
                    <strong>Rp. <?php echo $prod['harga'] ?></strong>
                </p>
            </div>

            <?php
                }
            
            ?>


        </div>

    </div>
</main>

<?php include "footer.php"; ?>


