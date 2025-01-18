<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>SiCourse | Data Siswa</title>
    <link rel="icon" href="{{ asset('images/online-lesson.png') }}" type="image/png">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
        }

        .photo-thumbnail {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar border border-bottom border-muted navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid px-5 py-2">
            <!-- Back Button with functionality -->
            <a class="btn btn-outline-secondary" href="{{ route('home') }}">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </nav>

    <!-- Container -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 w-75" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h3 class="mb-3 font-weight-bolder">Update Data Siswa</h3>
                <!-- Update Card -->
                <div class="card w-100 p-4 mb-3">
                    <div class="card-header-profile">
                        <h5>Update Profil Siswa</h5>
                        <hr>
                    </div>
                    <div class="card-body-profile">
                        <!-- Form Update Profil Siswa -->
                        <form method="POST"action="{{ route('siswa.update', ['nama' => $siswa->namasiswa]) }}"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <!-- Nama Siswa -->
                            <div class="mb-3">
                                <label for="namasiswa" class="form-label" style="font-size: 14px;">Nama Siswa</label>
                                <input type="text" class="form-control p-3" id="namasiswa" name="namasiswa" placeholder="Masukkan nama siswa" value="{{ old('namasiswa', $siswa->namasiswa) }}" style="font-size: 12px;" required>
                            </div>

                            <!-- Email Siswa -->
                            <div class="mb-3">
                                <label for="email" class="form-label" style="font-size: 14px;">Email</label>
                                <input type="email" class="form-control p-3" id="email" name="email" placeholder="Masukkan email siswa" value="{{ old('email', $siswa->email) }}" style="font-size: 12px;" required>
                            </div>

                            <!-- Nomor HP Siswa -->
                            <div class="mb-3">
                                <label for="NoHp" class="form-label" style="font-size: 14px;">Nomor HP</label>
                                <input type="text" class="form-control p-3" id="NoHp" name="NoHp" placeholder="Masukkan nomor HP siswa" value="{{ old('NoHp', $siswa->NoHp) }}" style="font-size: 12px;" required>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label" style="font-size: 14px;">Jenis Kelamin</label>
                                <select class="form-select p-3" id="jenis_kelamin" name="jenis_kelamin" style="font-size: 12px;" required>
                                    <option value="L" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            <!-- Foto Siswa -->
                            <div class="mb-3">

                                <!-- Display the current photo if exists -->
                                @if($siswa->foto)
                                    <div class="mb-3">
                                        <label class="form-label">Foto yang ada:</label><br>
                                        <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa" class="photo-thumbnail mb-3">
                                    </div>
                                @endif

                                <label for="foto" class="form-label" style="font-size: 14px;">Foto Siswa</label>
                                <input type="file" class="form-control p-3" id="foto" name="foto" style="font-size: 12px;">
                                <small class="form-text text-muted">Format gambar: jpg, png, jpeg (maksimal 2MB)</small>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" style="height: 50px; font-size: 14px;">
                                    <i class="fas fa-save"></i> Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card w-100 mb-5 p-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-muted" style="font-size: 11px;">
                            <i class="fas fa-shield-alt" style="color: #007bff; font-size: 14px; margin-right: 5px;"></i>
                            Pastikan data yang Anda masukkan sudah benar.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Example to manually dismiss the alert after a timeout (optional)
        setTimeout(function() {
            let alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show'); // Remove the 'show' class
                alert.classList.add('fade');    // Add the 'fade' class
            }
        }, 5000); // Dismiss after 5 seconds
    </script>

</body>
</html>
