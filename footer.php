</div>
</div>

<!-- Footer -->
<div class="container-fluid py-3 text-light" style="background-color: #AD8B73;">
    <div class="container d-flex justify-content-between align-items-center">
        <span>&copy;2023 Notiz Hut</span>
        <span>Sukarame</span>
    </div>
</div>

<!-- Bootstrap JS (with Popper) from CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Search Script -->
<script>
    function search() {
        var searchInputValue = document.getElementById('searchInput').value;
        if (searchInputValue.trim() !== '') {
            window.location.href = 'produk.php?judul=' + encodeURIComponent(searchInputValue);
        }
    }
</script>

</body>
</html>
