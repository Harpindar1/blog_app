<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Application v0.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
        <h1 class="text-white text-center">Blog Posts App</h1>
    </div>
    <div class="container">
    <div class="col-md-10 d-flex justify-content-end">
        <a href="{{ route('posts.create')}}" class="btn btn-dark">Create</a>
    </div>    
    <div class="row d-flex justify-content-center">
              
              @if (Session::has('success'))
              <div class="col-md-10">
                <div class="col-md-10 mt-4">
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                </div>
              </div>
              @endif
        </div>
        <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">My Posts</h3>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>