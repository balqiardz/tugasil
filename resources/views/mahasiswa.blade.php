<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link rel="stylesheet" href="mahasiswa.css">
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

    <h1>Halaman Mahasiswa</h1>
    <ul>
        <li><a href="{{ url('/') }}">home</a></li>
        <li><a href="{{ url('profile') }}">profile</a></li>
    </ul>
    <label>
        Nama Mahasiswa
        <input type="text" name="mahasiswa">
    </label>
    <br>
    <label>
        NPM
        <input type="number" name="mahasiswa">
    </label>
    <br>
    <label>
        Alamat
        <input type="text" name="mahasiswa">
    </label>
    <br>
    <label>
        Jenis Kelamin
        <input type="text" name="mahasiswa">
    </label>
    <br>
    <label>
        Agama
        <input type="text" name="mahasiswa">
    </label>
</body>

</html>