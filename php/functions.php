<?php
require_once "php/koneksi.php"; // Supaya tidak ganda


    
    function getKategori(){
        $mysqli = dbkonek();

         $hasil = $mysqli->query ("SELECT DISTINCT kategori from tbl_blog");
         while ($row = $hasil->fetch_assoc()){
            $kategori[] = $row;
         }
         return $kategori;
    }

    function getProduk($int){
        $mysqli = dbkonek();
        $hasil = $mysqli->query("SELECT * FROM tbl_blog ORDER BY rand() LIMIT $int");
        while($row = $hasil->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    function getProdukByKategori($kategori){
        $mysqli =dbkonek();

        $smtp = $mysqli->prepare("SELECT * FROM tbl_blog WHERE kategori = ?");
        $smtp->bind_param("s", $kategori);
        $smtp->execute();
        $result = $smtp->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    function getProdukByJudul($judul){
        $mysqli =dbkonek();

        $smtp = $mysqli->prepare("SELECT * FROM tbl_blog WHERE judul = ?");
        $smtp->bind_param("s", $judul);
        $smtp->execute();
        $result = $smtp->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }



    function cariProdukByJudul($searchKeyword) {
        $conn = dbkonek();
        $searchKeyword = $conn->real_escape_string($searchKeyword);

        $query = "SELECT * FROM tbl_blog WHERE judul LIKE '%$searchKeyword%'";
        $result = $conn->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $conn->close();
        return $data;
    }
