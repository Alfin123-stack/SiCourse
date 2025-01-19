<!-- resources/views/Enrol/riwayat.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiCourse | Riwayat Pembayaran</title>
    <link rel="icon" href="{{ asset('images/online-lesson.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Enrol</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .list-group-item {
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .list-group-item .icon {
            font-size: 1.3rem;
            margin-right: 10px;
        }

        .badge-status {
            font-weight: 600;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 2px solid #e0e0e0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar border border-bottom border-muted navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid px-5 py-2">
        <!-- Back Button -->
        <a class="btn btn-outline-secondary" href="/">
            <i class="fas fa-arrow-left me-2"></i>Kembali
        </a>
    </div>
</nav>

<div class="container mt-5">
    <h3>Riwayat Pembayaran</h3>

    @if($riwayatPembayaran->isEmpty())
        <p class="text-muted">Belum ada riwayat pembayaran.</p>
    @else
        <div class="list-group">
            @foreach($riwayatPembayaran as $pembayaran)
                <div class="list-group-item p-4">
                    <!-- Card for Payment History -->
                    <div class="card shadow-sm border-light">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-journal-check icon text-primary"></i>
                                <h5 class="mb-0">{{ $pembayaran->Kursus->nama }}</h5>
                            </div>
                            <!-- Status Badge -->
                            <span class="badge bg-{{ $pembayaran->Status == 'Lunas' ? 'success' : 'warning' }} badge-status">
                                {{ $pembayaran->Status }}
                            </span>
                        </div>
                        <div class="card-body">
                            <p><strong><i class="bi bi-person-fill"></i> Nama Siswa:</strong> {{ $pembayaran->Siswa->namasiswa }}</p>
                            <p><strong><i class="bi bi-calendar-check"></i> Tanggal Pendaftaran:</strong> {{ $pembayaran->tanggal }}</p>
                            <p><strong><i class="bi bi-credit-card"></i> Metode Pembayaran:</strong> {{ $pembayaran->payment_method }}</p>
                            <p><strong><i class="bi bi-pencil"></i> Catatan:</strong> {{ $pembayaran->additional_notes ?? 'Tidak ada' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

</body>
</html>
