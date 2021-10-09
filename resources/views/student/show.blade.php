<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session()->has('msg'))
    {{session()->get('msg')}}

    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">age</th>
            <th scope="col">address</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($show as $student )


            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->class}}</td>
                <td><img src="{{asset('/storage/StudentImage/'.$student->image)}}" width="100px"></td>
                <td>
                    <form action="{{route('StudentDelete',$student->id)}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('StudentEdit',$student->id)}}" class="btn btn-primary">EDIT</a>
                </td>
              </tr>
              @endforeach

        </tbody>
      </table>
      <a href="{{route('StudentForm')}}" class="btn btn-primary">Add teacher</a>
</body>
</html>
