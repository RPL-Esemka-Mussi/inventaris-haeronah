<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>inventario | Dashboard</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">Inventario</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="{{url('Dashboard')}}">Dashboard</a>
          <a class="nav-link" href="{{url('user')}}">User</a>
          <li class="nav-item dropdown ms-md-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}

            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('logout')}}">logout</a></li>

            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-10">
        <h5>kelola user</h5>
        @if(!empty(session('success')))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
        @endif
        <div class="card">
          <div class="card-body">
            <div class="ms-auto mb-2">
              <a href="{{ url('user/add')}}" class="btn btn-primary">Tambah</a>

            </div>

            <table class="table table-striped table-responsive">
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
              </tr>
              @foreach($users as $user)
              <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->telepon }}</td>
                <td>
                  <a href="{{ url('user/edit/'). '/' .$user -> id }}" class="btn btn-sm btn-success">Edit</a>
                  <a href="{{ url('user/delete/'). '/' .$user -> id }}" class="btn btn-sm btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optimal JavaScript -->
  <script src="{{ asset('js/bootsrap.bundle.min.js') }}"></script>
</body>

</html>