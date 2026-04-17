<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6 - AJAX Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; }
        .mhs-card { border-radius: 15px; border: none; transition: 0.3s; }
        .mhs-card:hover { transform: scale(1.03); shadow: 0 10px 20px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Daftar Mahasiswa Praktikum</h2>
        <p class="text-muted">Menggunakan Laravel 12 + AJAX jQuery</p>
        <button id="btnLoad" class="btn btn-primary btn-lg px-4 shadow-sm">Tampilkan Data</button>
    </div>

    <div id="hasilData" class="row justify-content-center">
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#btnLoad').on('click', function() {
            // Beri loading spinner
            $('#hasilData').html('<div class="text-center"><div class="spinner-border text-primary"></div></div>');

            $.ajax({
                url: "{{ url('/get-mahasiswa') }}",
                type: 'GET',
                success: function(response) {
                    let kartu = '';
                    
                    // Looping data dari JSON
                    response.forEach(function(mhs) {
                        kartu += `
                            <div class="col-md-4 mb-4">
                                <div class="card mhs-card shadow-sm p-4">
                                    <h5 class="text-primary fw-bold">${mhs.nama}</h5>
                                    <hr>
                                    <p class="mb-1 text-muted"><strong>NIM:</strong> ${mhs.nim}</p>
                                    <p class="mb-1 text-muted"><strong>Kelas:</strong> ${mhs.kelas}</p>
                                    <p class="mb-0 text-muted"><strong>Prodi:</strong> ${mhs.prodi}</p>
                                </div>
                            </div>`;
                    });

                    // Masukkan ke dalam div hasilData
                    $('#hasilData').hide().html(kartu).fadeIn();
                },
                error: function() {
                    alert('Gagal mengambil data!');
                }
            });
        });
    });
</script>

</body>
</html>