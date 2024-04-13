<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
    <div class="row justify-content-center">
<form action="{{url('admin')}}" method="post">
@csrf
<nav class="navbar bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">dashboard</span>
  </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('medicines') }}</div>
                <div class="card-body">
                <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">category</th>
      <th scope="col">available</th>
      <th scope="col">action</th>
 


    </tr>
  </thead>
  <tbody>
    @foreach($medicines as $medicine)
    <tr  class="table-danger">
      <th scope="row">{{$medicine->id}}</th>
      <td>{{$medicine->name}}</td>
      <td>{{$medicine->price}}.00 $</td>
      <td>{{$medicine->category}}</td>

      <td>true</td>
      <td>

      <a href="{{route('admin.show',$medicine->id)}}"> <button type="button" class="btn btn-outline-success">View</button></a>

      <a href="{{route('admin.edit',$medicine->id)}}"> <button type="button" class="btn btn-outline-success">update</button></a>

      <form style="display:inline;" action="{{route('admin.destroy',$medicine->id)}}" method="post">
      @csrf 
      @method('delete')
          <button type="submit" class="btn btn-outline-danger">delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<form action="{{route('admin.create')}}" method="get">
<button type="submit" class="btn btn-outline-dark">Add new medicine</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>