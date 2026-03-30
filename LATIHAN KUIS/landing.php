<?php
// Tangkap data dari form
$nama_depan     = $_POST['nama'];
$nama_belakang  = $_POST['nama_belakang'];
$telp           = $_POST['telp'];
$buku           = $_POST['buku'];
$pengiriman     = $_POST['pengiriman'];
$bayar          = $_POST['bayar'];

// Gabungkan nama depan + belakang
$nama_lengkap = $nama_depan . " " . $nama_belakang

// --- Harga buku (contoh statis, bisa diganti dari database) ---
$harga_buku = 0;
switch($buku) {
    case "laskarPelangi": $harga_buku = 85000; break;
    case "bumiManusia": $harga_buku = 95000; break;
    case "pulang": $harga_buku = 78000; break;
    case "negeri5Menara": $harga_buku = 70000; break;
    case "perahuKertas": $harga_buku = 88000; break;
    default: $harga_buku = 0;
}

// Hitung subtotal, diskon, total
$subtotal = $harga_buku;
$diskon   = 0; // bisa ditambahkan logika diskon
$total    = $subtotal - $diskon;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuKita</title>
      <link rel="icon" type="image/x-icon" href="https://images.unsplash.com/photo-1606607941306-80adddeadd4d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <!-- atas itu buat gambar logo dan alamatnya -->
    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <nav>
    <ul class="sidebar">
      <li onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"></path></svg></a></li>
      <li><a href="index.php">Daftar Buku</a></li>
      <li><a href="index.php">Kategori</a></li>
      <li><a href="form.php">Pemesanan</a></li>
    </ul>
    <ul>
      <li><a href="index.php">📚 Buku Kita</a></li>
      <li class="hideOnMobile"><a href="index.php">Daftar Buku</a></li>
      <li class="hideOnMobile"><a href="index.php">Kategori</a></li>
      <li class="hideOnMobile"><a href="form.php">Pemesanan</a></li>
      <li class="menu-button" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"></path></svg></a></li>
    </ul>
  </nav>

  
  <div class="struk">
    <h2>Ringkasan Pesanan</h2>
    <p style="text-align:center;">BukuKita</p>

    <div class="row"><span class="label">Nama:</span> <?php echo $nama_lengkap; ?></div>
    <div class="row"><span class="label">No. HP:</span> <?php echo $telp; ?></div>
    <div class="row"><span class="label">Buku:</span> <?php echo $buku; ?> (1 pcs)</div>
    <div class="row"><span class="label">Harga Satuan:</span> Rp<?php echo number_format($harga_buku,0,',','.'); ?></div>
    <div class="row"><span class="label">Pengiriman:</span> <?php echo ucfirst($pengiriman); ?></div>

    <hr>
    <div class="row"><span class="label">Subtotal:</span> Rp<?php echo number_format($subtotal,0,',','.'); ?></div>
    <div class="row"><span class="label">Diskon:</span> <?php echo $diskon > 0 ? "Rp".number_format($diskon,0,',','.') : "Tidak ada diskon"; ?></div>

    <div class="row total">TOTAL: Rp<?php echo number_format($total,0,',','.'); ?></div>

    <hr>
    <div class="row"><span class="label">Pembayaran:</span> <?php echo ucfirst($bayar); ?></div>

    <p style="text-align:center; margin-top:20px;">Terima kasih telah berbelanja di BukuKita! 📚</p>
  </div>


<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

  <section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
        <center> <br> <span class="me-3">Register for free</span> <br>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Sign up! </center> <br>
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     <br> © 2020 Copyright: BukuKita <br>
    </div>
  
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
  
</div>
<!-- End of .container -->

</body>
</html>