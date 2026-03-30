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

<br>

<center>    <h1>Form Pemesanan</h1>
    <p>Isi data di bawah ini untuk memesan buku pilihanmu</p>
<hr>
    <form action="proses_pemesanan.php" method="POST">
        <label for="nama">Nama Depan</label><br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama depan" required><br><br>

        <label for="nama_belakang">Nama Belakang</label><br>
        <input type="text" id="nama_belakang" name="nama_belakang" placeholder="Masukkan nama belakang" required><br><br>

        <label for="telp">No. HP</label><br>
        <input type="text" id="telp" name="telp"  placeholder="8xxxxxxxxx" required><br><br>

        <label for="buku">Pilih Buku</label><br>
        <select id="buku" name="buku" required>
            <option value="">--Pilih Buku--</option>
            <option value="laskarPelangi">Laskar Pelangi</option>
            <option value="bumiManusia">Bumi Manusia</option>
            <option value="pulang">Pulang</option>
            <option value="negeri5Menara">Negeri 5 Menara</option>
            <option value="perahuKertas">Perahu Kertas</option>
          </select><br><br>

    <div class="mb-3">
      <label class="form-label">Jenis Pengiriman</label><br>
      <input type="radio" name="pengiriman" value="reguler" required> Reguler&nbsp;&nbsp;
      <input type="radio" name="pengiriman" value="express"> Express&nbsp;&nbsp;
      <input type="radio" name="pengiriman" value="same_day"> Same Day&nbsp;&nbsp;
    </div>

    <br>
    <div class="mb-3">
      <label class="form-label">Metode Pembayaran</label><br>
      <input type="radio" name="bayar" value="bank" required> Tranfer Bank&nbsp;&nbsp;
      <input type="radio" name="bayar" value="COD"> COD&nbsp;&nbsp;
	<input type="radio" name="bayar" value="wallet"> E-Wallet&nbsp;&nbsp;
    </div>
 <br>
    <button class="submit-btn" onclick="submitForm()">Pesan Sekarang 📚</button>

</div>
    </form>
<br>

</center>
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