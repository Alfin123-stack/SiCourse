
@extends('template.navbarPrimary')

@section('content')


  <div class="container">
    <div class="header">
      <h1>Daftar Kursus Populer</h1>
      <p>Temukan kursus terbaik untuk meningkatkan keterampilan Anda di dunia teknologi.</p>
    </div>

    @if ($kursus->isEmpty())
      <div class="container text-center my-5">
          <h2>Tidak Ada Kursus Tersedia</h2>
          <p>Belum ada kursus yang terdaftar. Silakan tambahkan kursus untuk memulai pembelajaran.</p>
          <!-- Tombol Auto-Insert Kursus -->
          <form action="{{ route('seed.kursus') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-success">
                  Tambahkan Kursus Pemrograman
              </button>
          </form>
      </div>
      @else
      <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach ($kursus as $rskursus)
          <div class="col">
              <div class="card">
                  <img src="{{ $rskursus->url_gambar }}" class="card-img-top" alt="{{ $rskursus->nama }}">
                  <div class="badge-custom">Populer</div>
                  <div class="card-body">
                      <h5 class="card-title">{{ $rskursus->nama }}</h5>
                      <p class="card-text">{{ $rskursus->DeksripsiKursus }}</p>
                      <a href="{{ route('kursus.show', $rskursus->IdKursus) }}" class="btn btn-primary">Lihat Detail</a>
                      <div class="info-box">
                          <div><strong><i class="fas fa-clock"></i> {{ $rskursus->lama_kursus }} Jam</strong></div>
                          <div><strong><i class="bi bi-person-fill"></i> {{ $rskursus->mentor->namaMentor }}</strong></div>
                          <div><strong><i class="fas fa-users"></i> {{ $rskursus->jumlah_peserta }} Peserta</strong></div>
                      </div>
                      <div class="rating">
                          <span>{{ $rskursus->rating }}</span>
                          @for ($i = 1; $i <= 5; $i++)
                          <i class="fas fa-star{{ $i <= $rskursus->rating ? '' : '-o' }}"></i>
                          @endfor
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
      @endif

  </div>

@endsection
