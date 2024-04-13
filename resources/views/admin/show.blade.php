<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin">Home</a>

    </button>
    </nav>
  <div class="container">
  <div class="row justify-content-center">
  <div class="card" style="width: 18rem;">
  <img src="{{asset($medicine->image)}}" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$medicine->name}}</h5>
    <p class="card-text">indications_for_use :- <br> 1- {{$medicine->indications_for_use}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">price : {{$medicine->price}}.00 $</li>
    <li class="list-group-item">side_effects :- <br>1- {{$medicine->side_effects}}</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">more information :-</a><hr>
  </div>
</div>
</div>
</div>

</body>
</html>