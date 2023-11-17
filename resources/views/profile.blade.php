<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="path/to/profile.css">
    <title>Profile</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel C1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>




    <nav>
        <ul id="navbar">
            <h1 class="title">personal profile</h1>
            <li><a href="{{ url('/') }}">home</a></li>
            <li><a href="{{ url('mahasiswa') }}">mahasiswa</a></li>

        </ul>
    </nav>
    <div class="container">
        <h1>Profil Mahasiswa</h1>
        <p><strong>Nama:</strong> Balqis Aziizah Pohan</p>
        <p><strong>NIM:</strong> 2109020116</p>
        <p><strong>Jurusan:</strong> Teknologi Informasi</p>
        <p><strong>Alamat:</strong> Benowo</p>
        <p><strong>Email:</strong> balqisazizah31@gmail.com</p>
        <p><strong>Nomor Telepon:</strong> 081233462271</p>
        <p><strong>Tentang Saya:</strong> Saya adalah seorang mahasiswa yang sedang berkuliah di Universitas Muhammadiyah Sumatera Utara.</p>
    </div>
</body>

</html>