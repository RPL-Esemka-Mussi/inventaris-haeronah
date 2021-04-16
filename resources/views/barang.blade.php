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
                            <li><a class="dropdown-item" href="{{ url('/') }}">Keluar</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-15">
                <div class="alert alert-warning" role="alert">
                    <div class="alert alert-warning text-center" role="alert">
                        <h3>KELOLA BARANG Yukkk...</h3>
                    </div>


                    @if(!empty(session('success')))
                    SUCCESS <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-scriped table-responsive text-center">
                                <tr>
                                    <th>NO.</th>
                                    <th>NAMA BARANG</th>
                                    <th>SATUAN</th>
                                    <th>JUMLAH</th>
                                    <th>KETERANGAN</th>
                                    <th>LOKASI</th>
                                    <th>AKSI</th>
                                </tr>

                                @foreach($barang as $brg)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $brg->nama_barang }} </td>
                                    <td> {{ $brg->satuan }} </td>
                                    <td> {{ $brg->jumlah }} </td>
                                    <td> {{ $brg->keterangan }} </td>
                                    <td> {{ $brg->lokasi }} </td>
                                    <td>
                                        <a href="{{ url('barang/edit/') . '/' . $brg->id }}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{ url('barang/delete/') . '/' . $brg->id }}" class="btn btn-sm btn-outline-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                            <div class="float-end mb-2 mt-1">
                                <a href="{{ url('/barang/add')}}" class="btn btn-outline-primary">Add Barang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>