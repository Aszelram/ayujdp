<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jembatan Data Pangrango</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-7Fv8jZb/MZUz/oF+JDk3NohihJpOzXZdLsEN5A3tyejYdQOSwp+BWcDHXa4BSQpl" crossorigin="anonymous">
<!-- Memasukkan Font Awesome CSS dari CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" integrity="sha384-rNqvqKgld1ZzzZCx6z8hL5YjT6R3F6JJX8b5Dde0CZxgXa/iOCxi3UAF67hA6q3y" crossorigin="anonymous">

  <style>
    body 
    .card {
      box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Efek bayangan kartu */
    }
    .card-title {
      color: #333; /* Warna judul kartu */
    }
    .footer {
      background-color: #007bff; /* Sesuaikan warna latar belakang footer */
      color: #fff; /* Sesuaikan warna teks footer */
      text-align: center; /* Pusatkan teks footer */
    }

    .nav-link {
        font-weight: bold; /* Membuat teks di navbar lebih tebal */
    }

    .nav-link.text-warning {
        color: #ffc107 !important; /* Warna kuning untuk link dashboard */
    }

    .nav-link.text-primary {
        color: #007bff !important; /* Warna biru untuk link lainnya */
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand mr-auto" href="#">
        <img src="img/logojdp.png" width="180" height="35" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-primary" href="index.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-warning" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="registrasi.php">Registrasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="img/hatihati2.jpg" width="100%" height="100%" class="img-fluid" alt="Gambar Internet">
    </div>
    <div class="col-md-6">
      <img src="img/cp.jpeg" width="100%" height="100%" class="img-fluid" alt="Gambar Internet">
    </div>
  </div>
</div>

 <!-- Container untuk Konten -->
<!-- Container untuk Konten -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      <!-- Konten kiri -->
      <h2>PT. Jembatan Data Pangrango</h2>
      <p>PT. Jembatan Data Pangrango adalah perusahaan penyedia layanan internet terkemuka di Indonesia. Kami berkomitmen untuk menyediakan layanan internet berkualitas tinggi kepada pelanggan kami.</p>
      <p>Jika Anda memiliki pertanyaan atau kebutuhan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui formulir kontak di bawah ini atau melalui informasi kontak yang tersedia.</p>
      <hr>
      
      <!-- Daftar Artikel Blog -->
      <h3>Bisa Hubungi Jika Anda Punya Keluhan</h3>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Nomor Telepon</h5>
          <p class="card-text">
            <a href="https://wa.me/6285111045008" target="_blank">
              <i class="fab fa-whatsapp"></i> 0851-1104-5008
            </a>
          </p>
          <p class="card-text">
            <a href="https://wa.me/6285721143897" target="_blank">
              <i class="fab fa-whatsapp"></i> 0857-2114-3897
            </a>
          </p>
          <p class="card-text">
            <a href="https://wa.me/6285156009453" target="_blank">
              <i class="fab fa-whatsapp"></i> 0851-5600-9453
            </a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <!-- Konten kanan -->
      <h3>Alamat Kantor</h3>
      <p>Perumahan Griya Pesona Lestari Cijalingan Blok B3 No.3-4, Cijalingan, Cicantayan, Sukabumi.</p>
      <div class="map-container" style="height: 400px;">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.67788808796!2d106.8533408!3d-6.9002341!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6836eee27b5ccf%3A0xb68e59a2f98cf2bf!2sPerum%20Griya%20Pesona%20Lestari%20Cijalingan!5e0!3m2!1sid!2sid!4v1720511880884!5m2!1sid!2sid" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</div>


        </div>
        </div>
      </div>
    </div>
  </div>

<br>

  <!-- Footer -->
  <footer class="footer mt-auto py-3">
    <div class="container">
      <span>Copyright © 2024 - PT. Jembatan Data Pangrango </span>
    </div>
  </footer>

  <!-- Memasukkan Bootstrap JS dari CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha384-rV9CFYPtLBULj7PkhfLtTHjV2zVHGzmy8pFsdGf2yd3pJ9CspmVJNk7AAFF+Y5R6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha384-2nGTxOY8Jh3+hs9klxl5/C65f66f9iTjofYAn2TzFbRbYpx3eB2HtvvGLmoazFby" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha384-P8I8m8+q9/SFboJXCFZKxyUnXUgznU3HK+rZJjqcsl4BaY8a8FDN8S8ae5C/yJiR" crossorigin="anonymous"></script>

</body>
</html>
