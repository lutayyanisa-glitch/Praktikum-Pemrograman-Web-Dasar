<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuKita</title>
      <link rel="icon" type="image/x-icon" href="https://images.unsplash.com/photo-1606607941306-80adddeadd4d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <!-- atas itu buat gambar logo dan alamatnya -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
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
   <center><h1>Koleksi Buku Pilihan</h1>
  <p>buku-buku terbaik yang sudah kami kurasi khusus untuk kamuh</p>
  </center>

  <br>
<center>
<div class="about-details">
    <div class="detail-item">
      <div class="book-card">
        <img src="https://simpus.mkri.id/uploaded_files/sampul_koleksi/original/Monograf//uploadedfiles/perpustakaan/11610-11613.jpg" alt="Laskar Pelangi"> 
        <div class="book-card-body">
          <h3>Laskar Pelangi</h3>
          <p>BEST SELLER</p>
          <a href="#" class="btn-detail">Rp85.000</a>
        </div>
      </div>
    </div>
    
   <div class="detail-item"> 
      <div class="book-card">
        <img src="https://tagar.co/wp-content/uploads/2025/05/Novel-Bumi-Manusia.jpg" alt="Bumi Manusia">
        <div class="book-card-body">
          <h3>Bumi Manusia</h3>
          <p>BEST 2025</p>
          <a href="#" class="btn-detail">Rp90.000</a>
        </div>
      </div>
    </div>
   
    <div class="detail-item"> 
      <div class="book-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-RU4zJV2JcysrrzQF-RMDXWK-sx171Vfqbw&s" alt="Pulang">
        <div class="book-card-body">
          <h3>Pulang</h3>
          <p>BEST HORROR NOVEL</p>
          <a href="#" class="btn-detail">Rp75.000</a>
        </div>
      </div>
    </div>

    <div class="detail-item"> 
      <div class="book-card">
         <img src=" https://kominfosanti.bulelengkab.go.id/uploads/konten/resensi-buku-inilah-hebatnya-novel-negeri-5-menara-41.jpg" alt="Negeri 5 Menara">
        <div class="book-card-body">
          <h3>Negeri 5 Menara</h3>
          <p>Best petualankngan</p>
          <a href="#" class="btn-detail">Rp80.000</a>
        </div>
      </div>
    </div>

   <div class="detail-item"> 
    <div class="book-card">
      <img src="data:image/jpeg;base64,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 " alt="Perahu Kertas">
        <div class="book-card-body">
          <h3>Perahu Kertas</h3>
          <p>BEST ROMANCE</p>
          <a href="#" class="btn-detail">Rp70.000</a>
        </div>
      </div>
    </div>
</div>
</center>


<hr>
<center>
<div class="about-details">
    <div class="detail-item">
      <div class="book-card">
        <div class="book-card-body">
          <h3>Novel</h3>
          <p>Koleksi novel fiksi daan non-fiksi terbaik pilihan editor.</p>
        </div>
      </div>
    </div>

<div class="about-details">
    <div class="detail-item">
      <div class="book-card">
        <div class="book-card-body">
          <h3>Pendidikan</h3>
          <p>Buku teks dan referensi untuk pelajar dan mahasiswa.</p>
        </div>
      </div>
    </div>

<div class="about-details">
    <div class="detail-item">
      <div class="book-card">
        <div class="book-card-body">
          <h3>Bisnis</h3>
          <p>Panduan bisnis, wirausaha, dan pengembangan diri.</p>
        </div>
      </div>
    </div>
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
  </footer>

</body>
</html>