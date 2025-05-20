<?php require "php/functions.php"?>


<header style="background-color: #FFC0D9;">
  <h1>Welcome to Our Store</h1>
  <p class="sub-tittle">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, voluptatem dignissimos, hic deserunt illum placeat repellat dolore quisquam unde magnam reiciendis possimus alias consequuntur! Debitis illo recusandae itaque saepe nobis.
  </p>
</header>


<main>
    <div class="kiri">
        <div class="section-title">Produk Categories</div>
        <?php $kategori = getKategori() ?>
        <?php
            foreach($kategori as $kotogoro){
                ?>
                    <a href="kategori.php?kategori=<?php echo urlencode($kotogoro['kategori']) ?>">
                
                        <?php echo ucfirst($kotogoro['kategori']) ?>

                    </a>
                <?php
            }
        ?>
    </div>

    <div class="kanan">
        <div class="section-title"> Home Page</div>
        <?php $produk = getProduk(4) ?>
        <div class="produk">

            <?php
            
                foreach($produk as $prod){
                    ?>

                        <div class="produk-kiri">
                            <img src="<?php echo $prod['gambar_path']; ?>" alt="">
                        </div>
                        <div class="produk-kanan">
                            <p class="judul">
                                <a href="produk.php?judul=<?php echo urlencode($prod['judul']) ?>">
                            
                                    <?php echo $prod['judul']?>
                            
                                </a>
                            </p>
                            <p class="deskripsi">
                                <?php echo $prod['isi']?>
                            </p>
                            <p class="harga">
                                <?php echo $prod['harga']?>  &dollar;
                            </p>
                        </div>

                    <?php
                }
            
            ?>

        <?php
            
            foreach($produk as $prod){
                ?>

                    <div class="main_container">
                        <div class="product">
                            <img src="<?php echo $prod['gambar_path']; ?>" alt="">
                            <div class="product_desc">
                            <a href="produk.php?judul=<?php echo urlencode($prod['judul']) ?>">
                                 <?php echo $prod['judul']?>
                            </a>

                            <p>
                                <?php echo $prod['isi']?>
                            </p>
                            <p>
                                <?php echo $prod['harga']?>  &dollar;
                            </p>

                            </div>
                        </div>
                    </div>

                <?php
            }
        
        ?>



            
        </div>
    </div>
</main>




