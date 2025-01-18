<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>SiCourse | Enroll</title>
    <link rel="icon" href="{{ asset('images/online-lesson.png') }}" type="image/png">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar border border-bottom border-muted navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid px-5 py-2">
            <!-- Back Button -->
            <button type="button" class="btn btn-outline-secondary" onclick="window.history.back();">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </button>
        </div>
    </nav>

    <!-- Container -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3 class="mb-3 font-weight-bolder">Pembayaran untuk Kursus</h3>
                <!-- Enroll Card -->
                <div class="card w-100 p-4 mb-3">
                    <div class="card-header-enrol">
                        <h5>Harga Kursus</h5>
                        <hr>
                    </div>
                    <div class="card-body-enrol">
                        <!-- Form Pembayaran -->
                        <form method="POST" action="{{ route('enrol.store', ['kursusId' => $kursus->IdKursus]) }}">
                            @csrf
                            <!-- Nama Siswa -->
                            <div class="mb-3">
                                <label for="studentName" class="form-label" style="font-size: 14px;">Nama Siswa</label>
                                <!-- Display the student's name in the text field -->
                                <input type="text" class="form-control p-3" id="studentName" name="studentName" 
                                    value="{{ $siswa->namasiswa ?? '' }}" readonly style="font-size: 12px;" required>
                                
                                <!-- Hidden field to submit the actual student ID (or other relevant information) -->
                                <input type="hidden" name="studentName" value="{{ $siswa->namasiswa ?? '' }}">
                            </div>



                            <!-- Nama Kursus (Pre-filled) -->
                            <div class="mb-3">
                                <label for="courseName" class="form-label" style="font-size: 14px;">Nama Kursus</label>
                                <input type="text" class="form-control p-3" id="courseName" name="courseName" value="{{ $kursus->nama }}" readonly style="font-size: 12px;" required>
                            </div>

                            <!-- Harga (Pre-filled and Read-Only) -->
                            <div class="mb-3">
                                <label for="price" class="form-label" style="font-size: 14px;">Harga Kursus</label>
                                <input type="text" class="form-control p-3" id="price" name="price" value="Rp {{ number_format($kursus->harga_kursus, 2, ',', '.') }}" readonly style="font-size: 12px;" required>
                                <input type="hidden" name="price" value="{{ $kursus->harga_kursus }}"> <!-- hidden price field to submit actual value -->
                            </div>

                            <!-- Metode Pembayaran -->
                            <div class="mb-3">
                                <label for="paymentMethod" class="form-label" style="font-size: 14px;">Metode Pembayaran</label>
                                <select class="form-select p-3" id="paymentMethod" name="paymentMethod" style="font-size: 12px;" required>
                                    <option selected disabled>Pilih metode pembayaran</option>
                                    <option value="bank-transfer">Transfer Bank</option>
                                    <option value="credit-card">Kartu Kredit</option>
                                    <option value="ewallet">E-Wallet</option>
                                </select>
                            </div>

                            <!-- Catatan Tambahan -->
                            <div class="mb-3">
                                <label for="additionalNotes" class="form-label" style="font-size: 14px;">Catatan Tambahan</label>
                                <textarea class="form-control p-3" id="additionalNotes" name="additionalNotes" rows="3" placeholder="Masukkan catatan tambahan (opsional)" style="font-size: 12px;"></textarea>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" style="height: 50px; font-size: 14px;">
                                    <i class="fas fa-credit-card"></i> Kirim Pembayaran
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="card w-100 mb-5 p-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-muted" style="font-size: 11px;">
                            <i class="fas fa-shield-alt" style="color: #007bff; font-size: 14px; margin-right: 5px;"></i>
                            Bayar putus. Tak ada kewajiban untuk melanjutkan langganan. Tak ada tagihan rahasia.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
