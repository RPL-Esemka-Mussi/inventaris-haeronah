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
        <h5>tambah user</h5>
        <div class="card">
          <div class="card-body">
            <form action="{{url('user/insert') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">email </label>
                <input type="email" name="email" id="email" class="form-control">
              </div>

              <div class="form-group">
                <label for="password">password </label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <div class="form-group">
                <label for="Alamat">alamat </label>
                <input type="text" name="alamat" id="alamat" class="form-control">

              </div>

              <div class="form-group">
                <label for="telepon">telepon </label>
                <input type="text" name="telepon" id="telepon" class="form-control">
              </div>

              <div class="form-group">
                <label for="level">level </label>
                <input type="text" name="level" id="level" class="form-control">

              </div>
              <div class="mt-3 float-end">
                <button type="submit" class="btn btn-primary">
                  tambah
                </button>
                <button type="reset" class="btn btn-secondary">
                  reset
                </button>
                <a href="{{ url('user') }}" class="btn btn-warning">kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>