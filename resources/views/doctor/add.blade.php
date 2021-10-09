<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="card col-6 align-center" >
    <div class="card">
        @if (Session()->has('msg'))
        <h1>{{Session()->get('msg')}}</h1>
        @endif

    </div>

    <form action="{{route('create')}}" method="POST">
       @csrf
        <div class="form-row">



        <div class="form-group">
          <label for="inputAddress">Name</label>
          <input type="text" class="form-control" id="inputAddress" name="name">
        </div>

        </div>
        <div class="form-row">
        <div class="form-group">
          <label for="inputAddress2">Qualification</label>
          <input type="text" class="form-control" id="inputAddress2" name="qualification">
        </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Age</label>
            <input type="text" class="form-control" id="inputCity" name="age">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('show')}}" class="btn btn-primary">view list</a>
    </div>
      </form>
</div>
</body>
</html>
