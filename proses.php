<?php 

    $tanggal = date ('y-m-d');
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $nama_brg = $_POST['nama_brg'];
    $alamat = $_POST['alamat'];
    $jarak = $_POST['jarak'];
    $biaya = $jarak * 5000;

    echo "<head><title>Data</title></head>";
    $fp = fopen("data.txt", "a+");
    fputs($fp, "$tanggal|$nama|$no_hp|$nama_brg|$alamat|$jarak|$biaya\n");
    fclose($fp);

    echo "<script>alert('Anda Berhasil Mengirim Paket, Klik Ok untuk melihat data anda ....');
    window.location='datapengirim.php'</script>";

 ?>



