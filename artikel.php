<?php include "header.php"; ?>

<?php
        include "koneksi.php";
        $id = $_GET['id'];
        $data = $conn->query("SELECT * FROM tbl_blog WHERE id = '$id'");
        $row = $data->fetch_assoc();
?>
  <div class="article">
    <h2><?php echo $row['judul']; ?></h2>
    <img src="<?php echo $row['gambar_path']; ?>" alt="Gambar Artikel">
    <p><?php echo $row['isi']; ?></p>
  </div>
<?php include "footer.php"; ?>



<!---->

<?php
        include "koneksi.php";
        $data = $conn->query("SELECT * FROM tbl_blog");

        while ($row = $data->fetch_assoc()) {
    ?>

    <div class="article" id="article-<?php echo $row['id']; ?>">
        <img src="<?php echo $row['gambar_path']; ?>" alt="Gambar Artikel">
        <h2><a class="nogaris" href="artikel.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul']; ?></a></h2>
        <p class="article-content"><?php echo substr($row['isi'], 0, 150); ?>...</p>
        <button class="view-more-btn" onclick="redirectToArticle(<?php echo $row['id']; ?>)">View More</button>
    </div>

    <script>
        function redirectToArticle(articleId) {
            window.location.href = "artikel.php?id=" + articleId;
        }
    </script>

    <?php } // End while loop ?>


