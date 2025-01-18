<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiCourse | Home</title>
    <link rel="icon" href="{{ asset('images/online-lesson.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
      body {
      font-family: 'Poppins', sans-serif;
    }

    h1 {
      font-family: 'Poppins', sans-serif;
    }
    .footer-logo {
      max-width: 150px;
    }
    .footer-links a:hover {
      text-decoration: underline;
    }
    .social-icons a {
      font-size: 1.5rem;
      margin-right: 15px;
      color: #fff;
    }
    .social-icons a:hover {
      color: #007bff;
    }
    /* kursus */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
    }

    .card-body {
      padding: 2rem;
      color: #333;
    }

    .card-title {
      font-size: 1.8rem;
      font-weight: bold;
      color: #2c3e50;
      text-transform: uppercase;
    }

    .card-text {
      font-size: 1rem;
      color: #7f8c8d;
    }

    .btn-custom {
      background-color: #3498db;
      color: white;
      font-weight: bold;
      border-radius: 25px;
      padding: .8rem 1.2rem;
      transition: .5s;
    }

    .btn-custom:hover {
      background-color: white;
      border:2px solid #3498db;

    }

    .card-img-top {
        margin-top: 1rem;
      height: 150px;
      object-fit: contain;
      border-radius: 15px;
      transition: transform 0.3s ease;
    }

    .card-img-top:hover {
      transform: scale(1.1);
    }

    .badge-custom {
      position: absolute;
      top: 15px;
      right: 15px;
      background-color: #e74c3c;
      color: white;
      padding: 8px 15px;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: bold;
    }

    .container {
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .header {
      text-align: center;
      margin-bottom: 50px;
    }

    .header h1 {
      font-size: 3rem;
      font-weight: 700;
      color: #2c3e50;
    }

    .header p {
      font-size: 1.2rem;
      color: #7f8c8d;
    }

    .info-box {
      display: flex;
      justify-content: space-between;
      font-size: .8rem;
      color: #7f8c8d;
      margin-top: 1rem;
    }

    .rating {
      display: flex;
      align-items: center;
      margin-top: 1rem;
    }
    
    .rating span {
      font-size: 1rem;
      font-weight: bold;
      margin-right: 10px;
    }

    .rating i {
      color: gold;
      margin-right: 5px;
    }

    .rating .empty-star {
      color: #bdc3c7;
    }

      /* Footer Styling */
      .footer-logo {
        max-width: 150px;
      }

      .footer-links a:hover {
        text-decoration: underline;
      }

      .social-icons a {
        font-size: 1.5rem;
        margin-right: 15px;
        color: #fff;
      }

      .social-icons a:hover {
        color: #007bff;
      }

      /* Modal Styling - Using Bootstrap default */
      .modal-content {
        background-color: #ffffff;
        color: #333;
        padding: 1.2rem;
      }

      .modal-title {
        font-size: 1.8rem;
      }

      .form-control {
        border-radius: 10px;
        padding: 15px;
      }

      .btn-login {
        width: 100%;
        height: 3rem;
      }

      .register-link {
        text-align: center;
        margin-top: 20px;
      }

      .register-link a {
        color: #3498db;
        text-decoration: none;
      }

      .register-link a:hover {
        text-decoration: underline;
      }

      /* Styling tambahan untuk tampilan */
      .team-member {
            text-align: center; /* Pusatkan teks di dalam kolom */
            margin-bottom: 30px; /* Beri jarak bawah antar anggota tim */
        }
        .team-member img {
            width: 150px; /* Lebar gambar */
            height: 150px; /* Tinggi gambar */
            border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
            object-fit: cover; /* Memastikan gambar mengisi lingkaran dengan proporsional */
            margin-bottom: 20px; /* Beri jarak bawah gambar */
        }


        
        
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-absolute w-100">
      <div class="container px-4 py-4">
        <a class="navbar-brand font-weight-bolder display-4 text-white" href="#"><h2>SiCourse</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#mentor">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#learning-path">Learning Path</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('kursus.kursus') }}">Kursus</a>
            </li>
          </ul>
           <!-- Bagian Autentikasi -->
           @auth
            <div class="d-flex justify-content-center gap-4">
               <!-- Link Riwayat Pembayaran -->
               <div class='d-flex gap-2 justify-content-center align-items-center'>
                    <!-- Di dalam view kursus (misalnya di kursus.blade.php) -->
                      <a href="{{ route('riwayat-pembayaran') }}" class="btn btn-primary">
                          <i class="bi bi-clock-history"></i> Riwayat Pembayaran
                      </a>
                </div>
          
                <!-- Wrapper untuk ikon dan nama pengguna -->
                <div class='d-flex gap-2 justify-content-center align-items-center'>
                    <!-- Icon dengan border bulat dan warna putih -->
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fas fa-user text-white p-2 border border-white rounded-circle"></i>
                    </div>
                    <!-- Nama pengguna -->
                    <a class="nav-link text-white"  href="{{ route('siswa.edit', ['nama' => Auth::user()->name]) }}">{{ auth()->user()->name }}</a>
                </div>
                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type='submit' class="btn btn-outline-light">
                        <i class="fas fa-sign-in-alt"></i> Logout
                    </button>
                </form>
            </div>

        @else
            <div class="d-flex">
                <!-- Trigger modal login -->
                <a class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            </div>
        @endauth

        </div>
      </div>
    </nav>


  <!-- Modal Login -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/login" method="POST">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
        <!-- Link to the registration page -->
        <div class="mt-3 text-center">
          <p>Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Konten -->
      @yield('content')

    <!-- Footer -->
    <footer class="bg-primary text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
          <a class="navbar-brand font-weight-bolder display-4 text-white" href="#"><h2>SiCourse</h2></a>
            <p>Website ini menyediakan kursus online dan sumber daya untuk membantu Anda meningkatkan keterampilan di dunia teknologi.</p>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <h5 class="mb-3">Navigasi</h5>
            <ul class="list-unstyled footer-links">
              <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
              <li><a href="#" class="text-white text-decoration-none">Layanan</a></li>
              <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
              <li><a href="#" class="text-white text-decoration-none">Kontak</a></li>
              <li><a href="#" class="text-white text-decoration-none">Kebijakan Privasi</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <h5 class="mb-3">Ikuti Kami</h5>
            <div class="social-icons">
              <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
              <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
              <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <p>&copy; 2025 SiCourse. Semua hak dilindungi.</p>
        </div>
      </div>
    </footer>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
