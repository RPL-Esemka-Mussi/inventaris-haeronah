<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>inventario | login</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>LOGIN</h4>   
                            <h5>Inventaris</h5>
                
                        </div>
                        @if (!empty(session('error')))
                        <div class="alert-alert-denger">
                        {{session ('error')}}
                        </div>
                        @endif

                        <form action="{{ url('login') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary">login</button>
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