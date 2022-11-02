<?php
    require "config.php";

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $tgl = $_POST['tanggal'];
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'image/'.$gambar_baru)){
            $query = "INSERT INTO menu (nama_menu, harga, tgl_upload, gambar_menu) VALUES ('$nama','$harga','$tgl','$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:admin.php");
            }else{
                echo "Add Error";
            }
        }
  
        
    }
?>