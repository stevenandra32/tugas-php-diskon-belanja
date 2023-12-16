<?php
if (isset($_POST['submit'])) {
    $no_transaksi = $_POST['no_transaksi'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $judul_buku = $_POST['judul_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $harga_buku = $_POST['harga_buku'];

    $total_harga = $harga_buku * $jumlah_buku;

    $diskon_belanja = 0;
    if ($total_harga > 150000) {
        $diskon_belanja = $total_harga * 0.10;
    }

    $diskon_transaksi = 0;
    if ($no_transaksi <= 50) {
        $diskon_transaksi = $total_harga * 0.05;
    }

    $total_bayar = $total_harga - $diskon_belanja - $diskon_transaksi;
}
?>

    <?php if (isset($_POST['submit'])) { ?>
        <h3>HASIL</h3>
        <label>No. Transaksi :</label> <?php echo $no_transaksi; ?><br>
        <br>
        <label>Nama Pembeli :</label> <?php echo $nama_pembeli; ?><br>
        <br>
        <label>Harga :</label> <?php echo $harga_buku; ?><br>
        <br>
        <label>Diskon Belanja 10% :</label> <?php echo $diskon_belanja; ?><br>
        <br>
        <label>Diskon Transaksi 5% :</label> <?php echo $diskon_transaksi; ?><br>
        <br>
        <label>Total Pembayaran :</label> <?php echo $total_bayar;?><br>
    <?php } 
    ?>
    <br>
    <a href="index.html">Back</a>