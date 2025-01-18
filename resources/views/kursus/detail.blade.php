
@extends('template.navbarPrimary')

@section('content')

  <!-- Main Content -->
<!-- Header Section -->
<div class="course-header container-fluid overflow-hidden" style="background-image: url('https://dicoding-web-img.sgp1.digitaloceanspaces.com/original/commons/course-header-accent.png'), linear-gradient(180deg, #f4f4f5 0, #f4f4f5 100%); background-size: cover; background-position: center; padding: 50px 0;">
  <!-- Content Section -->
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-4">
      <img src="{{ $kursus->url_gambar }}" class="course-detail img-fluid rounded-4" alt="{{ $kursus->nama }}" style="height: 250px; object-fit: cover;">
    </div>
    <div class="col-md-6">
      <div>
        <p>
          <i class="fas fa-star" style="color: #FFD700;"></i> <!-- Warna kuning untuk bintang -->
          {{$kursus->rating}} <i class="bi bi-arrow-right"></i> <!-- Panah kanan -->
          <span class="text-decoration-underline">{{ $kursus->materi_kursus }}</span>
        </p>
        <h1 class='fs-2 font-weight-bolder'>{{ $kursus->nama }}</h1>
        <p>Topik : 
          @foreach(explode(',', $kursus->materi_kursus) as $materi)
            <button type="button" class="btn btn-outline-success btn-sm m-1">{{ trim($materi) }}</button>
          @endforeach
        </p>
        <div>
          <span>
            <i class="fas fa-medal" style="color: #007bff;"></i> <!-- Warna biru untuk medali -->
            Level {{ $kursus->InformasiTambahan }}
          </span>
          <span class="ms-3">
            <i class="bi bi-clock"></i> {{ $kursus->lama_kursus }} Jam
          </span>
        </div>
        <p class="mt-3">
          <i class="fas fa-users"></i> {{ $kursus->jumlah_peserta }} Siswa terdaftar
        </p>
        <p class="mt-3">
          {{ $kursus->DeksripsiKursus }}
        </p>

        <!-- Harga Kursus -->
        <p class="mt-3">
          <i class="bi bi-currency-dollar"></i> <!-- Ikon mata uang -->
          <strong>Rp {{ number_format($kursus->harga_kursus, 0, ',', '.') }}</strong>
        </p>

        <!-- Course Detail Page -->
        <button class="btn btn-outline-primary" 
                onclick="window.location.href='{{ route('enrol.create', ['kursusId' => $kursus->IdKursus]) }}'">
            Daftar Kursus <i class="bi bi-arrow-right"></i>
        </button>
      </div>
    </div>
  </div>
</div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 w-75" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
  <div class="row">
    <!-- Header Testimoni -->
    <h3 class="text-center mb-4">Testimoni Siswa</h3>
    <p class="text-muted text-center mb-5" style="font-size: 1.125rem;">
      Ribuan siswa sukses belajar di Dicoding Academy. Apa kata mereka? Berikut adalah testimoni asli mereka.
    </p>
    <hr class="mb-5">
    
    <!-- Tombol untuk membuka modal -->
    <div class="col-12 text-center mb-4">
      <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#testimonialModal">
        Berikan Testimoni
      </button>
    </div>
    
    <div class="container">
    <div class="row">
        @foreach($kursus->ulasan as $item)
            <div class="col-6 mb-2">
                <div class="comment p-4 border border-muted rounded-2">
                    <div class="comment-header d-flex gap-4">
                        <div class="user-status">
                            <p class="text-muted mb-2" style="font-size: 0.875rem;">
                                <i class="fas fa-user-graduate text-muted me-2"></i> {{ $item->NamaSiswa }}
                            </p>
                            <p class="text-muted mb-2" style="font-size: 0.75rem;">
                                <i class="fas fa-university text-muted me-2"></i> {{ $item->Universitas }}
                            </p>
                            <!-- Tidak lagi membutuhkan NamaKursus, bisa ambil langsung dari $kursus -->
                            <p class="text-muted mb-2" style="font-size: 0.75rem;">
                                <i class="fas fa-book text-muted me-2"></i> {{ $kursus->nama }}
                            </p>

                            <div class="rating">
                                <!-- Menampilkan rating bintang -->
                                @for ($i = 0; $i < 5; $i++)
                                    <span class="text-warning">
                                        <i class="fas fa-star {{ $i < $item->Rating ? '' : 'text-muted' }}"></i>
                                    </span>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="comment-body mt-3">
                        <p>{{ $item->Komentar }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>


  </div>
</div>



    <!-- Modal Testimoni -->
    <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="testimonialModalLabel">Berikan Testimoni Anda</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="{{ route('ulasan.store', $kursus->IdKursus) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NamaSiswa" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="NamaSiswa" name="NamaSiswa" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="Universitas" class="form-label">Universitas</label>
                    <input type="text" class="form-control" id="Universitas" name="Universitas" placeholder="Masukkan Universitas Anda" required>
                </div>
                <div class="mb-3">
                    <label for="Rating" class="form-label">Rating <i class="fas fa-star" style="color: #FFD700;"></i> 
                    </label>
                    <select class="form-control" id="Rating" name="Rating" required>
                        <option value="1">1 Star</option>
                        <option value="2">2 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="5">5 Stars</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Komentar" class="form-label">Komentar</label>
                    <textarea class="form-control" id="Komentar" name="Komentar" rows="4" placeholder="Tulis komentar Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
            </form>

          </div>
        </div>
      </div>
    </div>

    </div>
</div>
@endsection
