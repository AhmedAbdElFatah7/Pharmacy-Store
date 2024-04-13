<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
    <div class="row justify-content-center">
<form action="{{route('admin.store')}}" method="post">
@csrf
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </nav>
    <div class="form-floating mb-3">
    <input class="form-control" type="text" name="name" id="name" placeholder="name">
    <label for="name">name</label>
    </div>

    <div class="form-floating mb-3">
    <input class="form-control" type="text" name="price" id="price"  placeholder="price">
    <label for="price">price</label>
    </div>

    <div class="form-floating mb-3">
    <input class="form-control" type="text" name="image" id="image" placeholder="image">
    <label for="image">image</label>
    </div>
    <div class="form-floating mb-3">
    <input class="form-control" type="text" name="category" id="category" placeholder="category">
    <label for="image">category</label>
    </div>

    <div class="form-floating mb-3">
    <input class="form-control" type="text" name="indications_for_use" id="Indications for use" placeholder="Indications for use">
    <label for="Indications for use">Indications for use</label>
    </div>

    <div class="form-floating mb-3">
    <input class="form-control " type="text" name="side_effects" id="side effects" placeholder="side effects">
    <label for="side effects">side effects</label>
    </div>
    <button type="submit" class="btn btn-primary">add</button>
</form>
</body>
</html>