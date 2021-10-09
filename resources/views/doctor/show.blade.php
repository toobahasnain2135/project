<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-primary" href="{{route('createform')}}">Add new</a>
    <div class="card">
        @if (Session()->has('msg'))
        <h1>{{Session()->get('msg')}}</h1>
        @endif

    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Qualification</th>
            <th scope="col">age</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $data as $d)
            <tr>
                <th scope="row">{{$d->id }}</th>
                <td>{{$d->name}}</td>
                <td>{{$d->qualification}}</td>
                <td>{{$d->age}}</td>
                <td>
                    <form action="{{route('updateform',$d->id)}}" method="get">
                        @csrf

                        <button type="submit" class="btn btn-primary">update</button></form>
                </td>
                <td>
                    <form action="{{route('delete',$d->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-primary">delete</button></form>
                </td>

              </tr>
            @endforeach


        </tbody>
      </table>

</body>
</html>
