<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Inventario | Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">INVENTARIS BARANG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">Dashboard</a>
                    <a class="nav-link active" aria-current="page" href="{{ url('barang') }}">Barang</a>
                    <a class="nav-link" href="{{ url('user') }}">User</a>
                    <a class="nav-link active" aria-current="page" href="{{ url('laporan') }}">Laporan</a>
                    <li class="nav-item dropdown ms-md-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('logout') }}">Keluar</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-15">
                <div class="alert alert-success" role="alert">
                    <div class="alert alert-success text-center" role="alert">
                        <h3>EDIT BARANG</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('barang/update')}}" method="post">

                                @csrf

                                <input type="hidden" name="id" value="{{ $barang->id }}">

                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input value="{{ $barang->nama_barang }}" type="text" name="nama_barang" id="nama_barang" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="satuan">Satuan</label>
                                    <input value="{{ $barang->satuan }}" type="number" name="satuan" id="satuan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input value="{{ $barang->jumlah }}" type="number" name="jumlah" id="jumlah" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Ketrangan</label>
                                    <input value="{{ $barang->keterangan }}" type="text" name="keterangan" id="keterangan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input value="{{ $barang->lokasi }}" type="text" name="lokasi" id="lokasi" class="form-control">
                                </div>

                                <div class="mt-3 float-end">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                    <a href="{{ url('barang') }}" class="btn btn-outline-danger">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>
