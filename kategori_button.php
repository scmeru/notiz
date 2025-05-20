<div class="section-title">
        <h2>Kategori</h2> <!-- Tambahkan teks Kategori di atas tombol -->
        <div class="kategori-container">
            <?php $kategori = getKategori(); ?>
            <?php 
                // Ambil kategori yang aktif dari URL
                $activeCategory = isset($_GET['kategori']) ? $_GET['kategori'] : '';
            ?>
            <?php foreach($kategori as $kotogoro): ?>
                <?php 
                    // Tentukan apakah tombol ini aktif
                    $isActive = ($activeCategory == $kotogoro['kategori']) ? 'active' : ''; 
                ?>
                <a class="kategori-button <?php echo $isActive; ?>" href="kategori.php?kategori=<?php echo urlencode($kotogoro['kategori']) ?>#kategoriii">
                    <?php echo ucfirst($kotogoro['kategori']) ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div> <!-- Close section-title -->