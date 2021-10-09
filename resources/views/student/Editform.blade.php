<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>@if (session()->has('msg'))
        {{session()->get('msg')}}
    @endif</h3>
    <form action="{{route('StudentUpdated',$student->id) }}" method="POST">
        <div class="form-group">
            @csrf
            @method('PATCH')
          <label for="exampleInputEmail1">name</label>
          <input type="text" value="{{$student->name}}" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age</label>
          <input type="text" value="{{$student->age}}" name="age" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Adress</label>
            <input type="text" value="{{$student->class}}" name="class" class="form-control" id="exampleInputPassword1" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
